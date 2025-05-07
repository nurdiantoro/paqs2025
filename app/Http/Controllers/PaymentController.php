<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    public function initiatePayment()
    {
        $timestamp = now()->format('Y-m-d\TH:i:sP');
        $externalId = 'INV' . time();
        // $externalId = 'INV1746195322';
        $amount = number_format(150000, 2, '.', '');
        $callbackUrl = route('payment.payment');
        $relativeUrl = env('ESPAY_HOSTTOHOST_RELATIVE_URL');
        $privateKey = openssl_pkey_get_private(file_get_contents(storage_path('keys/private.pem')));
        $publicKey  = openssl_pkey_get_public(file_get_contents(storage_path('keys/public.pub')));
        $url = env('ESPAY_HOSTTOHOST_URL');

        // Body v.1.0 =======================================================================
        $body = [
            'partnerReferenceNo' => $externalId,
            'merchantId' => env('ESPAY_MERCHANT_CODE'),
            'subMerchantId' => env('ESPAY_API_KEY'),
            'amount' => [
                'value' => $amount,
                'currency' => 'IDR',
            ],
            'urlParam' => [
                'url' => $callbackUrl,
                'type' => 'PAY_RETURN',
                'isDeeplink' => 'N',
            ],
            // 'validUpTo' => now()->addHours(2)->format('Y-m-d\TH:i:sP'),
            'pointOfInitiation' => 'Web',
            'payOptionDetails' => [
                'payMethod' => '008',
                'payOption' => 'CREDITCARD',
                'transAmount' => [
                    'value' => $amount,
                    'currency' => 'IDR',
                ],
                'feeAmount' => [
                    'value' => '0.00',
                    'currency' => 'IDR',
                ],
            ],
            'additionalInfo' => [
                'payType' => 'REDIRECT',
                'userName' => 'Nama Pelanggan',
                'userEmail' => 'email@pelanggan.com',
                'userPhone' => '081234567890',
                'productCode' => 'CREDITCARD',
                'balanceType' => 'CASH',
            ],
        ];
        // dd($body);

        // Signature v.1.0 =======================================================================
        $minifiedJson = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $sha256Hash  = hash('sha256', $minifiedJson);
        $hexLowercase = strtolower($sha256Hash);
        // dd([$sha256Hash, $hexLowercase]);

        $stringToSign = 'POST:' . $relativeUrl . ':' . $sha256Hash . ':' . $timestamp;
        openssl_sign($stringToSign, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        $xSignature  = base64_encode($signature);
        // dd($stringToSign);

        // $xSignature = 'gLEzw6GN7mHTs8K4RIEol6zwe+FghvHUdHDDtWLAcX10uhRbsdCjoMZjKAVetmYcSYciQO4b9EqK9gEEcfKCecMZ9vviIipWuT9gio8JoOCzbIW+NQjFs7FDSWs1xdClJOjHG5WHrSIDP/fxPlaZe+M0c8qk9vMwbHUfWL8PdAE/tqjU0taYVWoii8dOBEc9UjjvdjYTvJ+L8916+xDcngTNGDvb8Ks64o5vCJzI7Pn6NVhN219RNvM3D/APBRdq8wvToqr1kjnz6+DjqlleeBhr4hji5Gz63MCKCdZ/5bk9P0Mq2LG3OsAN/xahr64i+nh6G1da7tSh15Bwy0i8Xg==';

        // decode
        $xSignature_decode  = base64_decode($xSignature);
        $verificationResult = openssl_verify($stringToSign, $xSignature_decode, $publicKey, OPENSSL_ALGO_SHA256);


        // dd($xSignature);

        // Headers =======================================================================
        $headers = [
            'Content-Type' => 'application/json',
            'X-TIMESTAMP' => $timestamp,
            'X-SIGNATURE' => $xSignature,
            'X-EXTERNAL-ID' => $externalId,
            'X-PARTNER-ID' => env('ESPAY_MERCHANT_CODE'),
            'CHANNEL-ID' => 'ESPAY',
        ];

        dump((
            [
                $externalId,
                $relativeUrl,
                $timestamp,
                $headers,
                $body,
                $minifiedJson,
                $stringToSign,
                $xSignature,
                $verificationResult,
            ]
        ));


        $response = Http::withHeaders($headers)->post($url . $relativeUrl, $body);

        dd($response->body());

        if ($response->successful()) {
            $responseData = $response->json();
            return redirect($responseData['webRedirectUrl']);
        } else {
            Log::error('Espay Payment Error', [
                'response_body' => $response->body(),
                'status' => $response->status(),
            ]);
            return back()->withErrors(['message' => 'Terjadi kesalahan saat memproses pembayaran.']);
        }
    }

    public function callback() {}

    public function payment(Request $request)
    {
        $timestamp = $request->header('X-TIMESTAMP');
        $signature = $request->header('X-SIGNATURE');
        $externalId = $request->header('X-EXTERNAL-ID');
        $partnerId = $request->header('X-PARTNER-ID');
        $channelId = $request->header('CHANNEL-ID');

        $payload = $request->getContent();

        // Bangun stringToSign dengan struktur yang sama dengan saat sign
        $body = json_decode($request->getContent(), true);
        $minifiedJson = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $sha256Hash  = hash('sha256', $minifiedJson);

        $relativeUrl = '/apimerchant/v1.0/debit/payment-host-to-host'; // Pastikan ini benar
        $stringToSign = 'POST:' . $relativeUrl . ':' . $sha256Hash . ':' . $timestamp;

        // Verifikasi signature menggunakan public key Espay
        $espayPublicKey = openssl_pkey_get_public(file_get_contents(storage_path('keys/public.pub')));
        $decodedSignature = base64_decode($signature);
        $verified = openssl_verify($stringToSign, $decodedSignature, $espayPublicKey, OPENSSL_ALGO_SHA256);

        if ($verified !== 1) {
            Log::warning('Signature verification failed for Espay callback.', [
                'external_id' => $externalId,
                'string_to_sign' => $stringToSign,
                'payload' => $payload,
            ]);
            return response()->json(['message' => 'Invalid signature'], 400);
        }

        // Decode body
        $data = json_decode($payload, true);

        // Simpan atau update status pembayaran
        Log::info('Valid Espay Payment Callback Received', [
            'external_id' => $externalId,
            'payload' => $data,
        ]);

        return response()->json(['message' => 'Callback received'], 200);
    }
}
