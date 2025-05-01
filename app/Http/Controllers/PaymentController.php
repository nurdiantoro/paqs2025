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
        // return 'test';
        $orderId = 'INV' . time();
        $amount = number_format(150000, 2, '.', '');
        $timestamp = now()->format('Y-m-d\TH:i:sP');
        $externalId = uniqid();
        $callbackUrl = route('payment.callback');
        $relativeUrl = 'https://sandbox-api.espay.id/apimerchant/v1.0/debit/payment-host-to-host';
        $privateKey = openssl_pkey_get_private(file_get_contents(storage_path('keys/private.pem')));
        $publicKey  = openssl_pkey_get_public(file_get_contents(storage_path('keys/public.pub')));

        // dd($privateKey);

        $body = [
            'partnerReferenceNo' => $orderId,
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
            'validUpTo' => now()->addHours(2)->format('Y-m-d\TH:i:sP'),
            'pointOfInitiation' => 'Website',
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
                'productCode' => 'OVOLINK',
                'balanceType' => 'CASH',
            ],
        ];
        // dd($body);

        $minifiedJson = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $sha256Hash  = hash('sha256', $minifiedJson);
        $hexLowercase = strtolower($sha256Hash);
        // dd($hexLowercase);

        $stringToSign = 'POST:' . $relativeUrl . ':' . $hexLowercase . ':' . $timestamp;
        openssl_sign($stringToSign, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        $x_signature  = base64_encode($signature);
        // dd($stringToSign);

        // decode =======================================================================
        $x_signature_decode  = base64_decode($x_signature);
        $verificationResult = openssl_verify($stringToSign, $x_signature_decode, $publicKey, OPENSSL_ALGO_SHA256);

        // dd($x_signature);

        // dd([$minifiedJson, $stringToSign, $privateKey, $x_signature, $verificationResult]);

        $headers = [
            'Content-Type' => 'application/json',
            'X-TIMESTAMP' => $timestamp,
            'X-SIGNATURE' => $x_signature,
            'X-EXTERNAL-ID' => $externalId,
            'X-PARTNER-ID' => env('ESPAY_MERCHANT_CODE'),
            'CHANNEL-ID' => 'ESPAY',
        ];

        // dd($headers);

        $response = Http::withHeaders($headers)->post($relativeUrl, $body);
        // $response = Http::withHeaders($headers)->post(env('ESPAY_BASE_URL'), $body);

        dd($response);

        if ($response->successful()) {
            return 'berhasil';
            $responseData = $response->json();
            return redirect($responseData['webRedirectUrl']);
        } else {
            // return 'gagal';
            Log::error('Espay Payment Error', [
                'response_body' => $response->body(),
                'status' => $response->status(),
            ]);
            return back()->withErrors(['message' => 'Terjadi kesalahan saat memproses pembayaran.']);
        }
    }
}
