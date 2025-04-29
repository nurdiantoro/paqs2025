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
        $orderId = 'INV' . time();
        $amount = number_format(150000, 2, '.', '');
        $timestamp = now()->format('Y-m-d\TH:i:sP');
        $externalId = uniqid();
        $callbackUrl = route('payment.callback');

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
                'payMethod' => '014',
                'payOption' => 'BCAATM',
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

        $stringToSign = 'POST:' . env('ESPAY_BASE_URL') . ':' . strtolower(sha1(json_encode($body))) . ':' . $timestamp;
        $privateKey = file_get_contents(storage_path('keys/private.pem'));
        openssl_sign($stringToSign, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        $base64Signature = base64_encode($signature);

        // dd($base64Signature);

        $headers = [
            'Content-Type' => 'application/json',
            'X-TIMESTAMP' => $timestamp,
            'X-SIGNATURE' => $base64Signature,
            'X-EXTERNAL-ID' => $externalId,
            'X-PARTNER-ID' => env('ESPAY_MERCHANT_CODE'),
            'CHANNEL-ID' => 'ESPAY',
        ];

        // dd($headers);

        $response = Http::withHeaders($headers)->post(env('ESPAY_BASE_URL'), $body);

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
