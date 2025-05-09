<?php

namespace App\Http\Controllers;

use App\Http\Resources\EspayResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;



class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    function generateEspaySignature(array $body, string $relativeUrl, string $timestamp, $privateKey): array
    {
        $minifiedJson = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $sha256Hash  = hash('sha256', $minifiedJson);
        $stringToSign = 'POST:' . $relativeUrl . ':' . $sha256Hash . ':' . $timestamp;
        openssl_sign($stringToSign, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        $xSignature = base64_encode($signature);

        return [
            'minifiedJson' => $minifiedJson,
            'stringToSign' => $stringToSign,
            'xSignature' => $xSignature,
        ];
    }

    public function initiatePayment()
    {
        $timestamp = now()->format('Y-m-d\TH:i:sP');
        $externalId = 'INV' . time();
        // $externalId = 'INV1746195322';
        $amount = number_format(150000, 2, '.', '');
        $callbackUrl = route('payment.inquiry');
        $relativeUrl = '/apimerchant/v1.0/debit/payment-host-to-host';
        $privateKey = openssl_pkey_get_private(file_get_contents(storage_path('keys/private.pem')));
        $publicKey  = openssl_pkey_get_public(file_get_contents(storage_path('keys/public.pub')));
        $url = env('ESPAY_BASE_URL', 'https://sandbox-api.espay.id');

        // Body v.1.0 =======================================================================
        $body = [
            'partnerReferenceNo' => $externalId,
            'merchantId' => config('services.espay.merchant_code'),
            'subMerchantId' => env('ESPAY_API_KEY', '976846332bc02b07add6e4ed7c2abe71'),
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

        $signatureData = $this->generateEspaySignature($body, $relativeUrl, $timestamp, $privateKey);

        // decode
        $xSignature_decode  = base64_decode($signatureData['xSignature']);
        $verificationResult = openssl_verify($signatureData['stringToSign'], $xSignature_decode, $publicKey, OPENSSL_ALGO_SHA256);


        // dd($xSignature);

        // Headers =======================================================================
        $headers = [
            'Content-Type' => 'application/json',
            'X-TIMESTAMP' => $timestamp,
            'X-SIGNATURE' => $signatureData['xSignature'],
            'X-EXTERNAL-ID' => $externalId,
            'X-PARTNER-ID' => config('services.espay.merchant_code'),
            'CHANNEL-ID' => 'ESPAY',
        ];

        dump((
            [
                $externalId,
                $relativeUrl,
                $timestamp,
                $headers,
                $body,
                $signatureData['minifiedJson'],
                $signatureData['stringToSign'],
                $signatureData['xSignature'],
                $verificationResult,
            ]
        ));


        $response = Http::withHeaders($headers)->post($url . $relativeUrl, $body);

        // dd($response->body());

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


    public function inquiry(Request $request)
    {
        // Ambil semua header
        $timestamp    = $request->header('X-TIMESTAMP');
        $signature    = $request->header('X-SIGNATURE');
        $externalId   = $request->header('X-EXTERNAL-ID');
        $partnerId    = $request->header('X-PARTNER-ID');
        $channelId    = $request->header('CHANNEL-ID');

        // Validasi Partner ID
        // dd([$timestamp, $signature, $externalId, $partnerId, $channelId]);
        if ($partnerId !== config('services.espay.merchant_code')) {
            return response()->json([
                'responseCode' => '4032401',
                'responseMessage' => 'Unauthorized Partner ID',
            ], 403);
        }

        // Validasi parameter yang diterima
        $request->validate([
            'paymentId' => 'required|string',
            'paymentAmount' => 'required|numeric',
            'commCode' => 'required|string',
            'bankCode' => 'required|string',
            'productCode' => 'required|string',
        ]);

        $response = [
            'responseCode' => '2002400',
            'responseMessage' => 'Success',
            'virtualAccountData' => [
                'partnerServiceId' => ' ESPAY',
                'customerNo' => config('services.espay.merchant_code'),
                'virtualAccountNo' => 'DIGOERDER00001',
                'virtualAccountName' => 'Jokul Doe',
                'virtualAccountEmail' => 'john@email.com',
                'virtualAccountPhone' => '6281828384858',
                'inquiryRequestId' => (string) Str::uuid(),
                'totalAmount' => [
                    'value' => '150000.00',
                    'currency' => 'IDR',
                ],
                'billDetails' => [
                    [
                        'billDescription' => [
                            'english' => 'Invoice No 123456',
                            'indonesia' => 'Tagihan No 123456',
                        ],
                    ],
                ],
                'additionalInfo' => [
                    'token' => '2023011167618274122',
                    'transactionDate' => now()->format('Y-m-d\TH:i:sP'),
                    'dataMerchant' => [
                        'kodeCa' => '880105',
                        'kodeSubCa' => '-',
                        'noKontrak' => '060223118342',
                        'namaPelanggan' => 'Yories Yolanda',
                        'angsuranKe' => '15',
                        'jmlBayarExcAdm' => 5000000.00,
                        'denda' => 0.00,
                        'feeCa' => 5000.00,
                        'feeSwitcher' => 0.00,
                        'totalAdmin' => 5000.00,
                        'jumlahBayar' => 5005000.00,
                        'minimumAmount' => 2000000.00,
                        'totalAngsuran' => 48,
                        'customer' => [
                            'email' => 'test@gmail.com',
                        ],
                        'jatuhTempo' => '2025-03-10',
                        'listBills' => [
                            [
                                'billCode' => '01',
                                'billName' => 'Bill Invoice 1',
                                'billAmount' => [
                                    'value' => '70000.00',
                                    'currency' => 'IDR',
                                ],
                                'billSubCompany' => '00001',
                            ],
                            [
                                'billCode' => '02',
                                'billName' => 'Bill Invoice 2',
                                'billAmount' => [
                                    'value' => '50000.00',
                                    'currency' => 'IDR',
                                ],
                                'billSubCompany' => '00002',
                            ],
                        ],
                        'shippingAddress' => [
                            'firstName' => 'Jokul',
                            'lastName' => 'Doe',
                            'address' => 'Jl. Teknologi Indonesia No. 25',
                            'city' => 'Jakarta',
                            'postalCode' => '12960',
                            'phoneNumber' => '6281828384858',
                            'countryCode' => 'IDN',
                        ],
                        'items' => [
                            [
                                'id' => '1',
                                'name' => 'Newlook Charm',
                                'price' => '10000',
                                'type' => 'Contact Lens',
                                'url' => 'https://domain.com/products/detail?id=1',
                                'quantity' => '1',
                            ],
                            [
                                'id' => '2',
                                'name' => 'Newlook Playful',
                                'price' => '10000',
                                'type' => 'Contact Lens',
                                'url' => 'https://domain.com/products/detail?id=2',
                                'quantity' => '1',
                            ],
                        ],
                    ],
                ],
            ],
        ];

        return response()->json($response, 200);
    }

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
