<?php

namespace App\Http\Controllers;

use App\Http\Resources\EspayResource;
use App\Models\Category;
use App\Models\EspayPayment;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Validator;



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

    public function initiatePayment(Request $request)
    {
        // TAHAPAN KODE DI BAWAH INI, BIAR PAHAM!!!!
        // 0. Bikin Variable dulu biar gak pusing
        // 1. Cek apakah payment pakai credit card atau manual
        // 2. Jika USD, dikonvert dulu jadi IDR
        // 3. ESPAYYYYY!!!!!!!!
        // ==================================================================
        // ==================================================================


        // ==================================================================
        // 0. Bikin Variable
        // ==================================================================
        $orderData = session('order_data');
        $no_invoice = date('Ymd') . rand(1000, 9999);
        while (Order::where('no_invoice', $no_invoice)->exists()) {
            $no_invoice = date('Ymd') . rand(100000, 999999);
        }
        $category = Category::find($orderData['category']);
        $total_price = $category->price * $orderData['quantity'];


        // ==================================================================
        // 1. Cek apakah payment pake credit card
        // 1a. kalau gak ada, langsung kirim email tagihan yang nantinya redirect ke halaman invoice
        // ==================================================================
        if ($request->payment !== 'credit_card') {
            $order = Order::create([
                'no_invoice'       => $no_invoice,
                'title'            => $orderData['title'],
                'first_name'       => $orderData['first_name'],
                'last_name'        => $orderData['last_name'],
                'full_name'        => $orderData['first_name'] . ' ' . $orderData['last_name'],
                'is_member'        => $orderData['member'],
                'member_id'        => $orderData['member_id'] ?? null,
                'association_id'   => $orderData['association'] ?? null,
                'company'          => $orderData['company'],
                'address'          => $orderData['address'],
                'telephone'        => $orderData['telephone'],
                'email'            => $orderData['email'],
                'category_id'      => $orderData['category'],
                'addon_id'         => $orderData['add_on'] ?? null,
                'quantity'         => $orderData['quantity'],
                'total_price'      => $total_price,
                'payment_status'   => 'unpaid',
                'payment_method'   => $request->payment,
                'proof_of_payment' => $orderData['proof_of_payment'] ?? null,
            ]);
            session()->forget('order_data');
            return redirect(url('email/' . $no_invoice . '/' . $order->email));
        }

        // ==================================================================
        // 2. Konversi USD Ke IDR
        // ==================================================================
        if ($category->currency == 'USD') {
            $total_price = $total_price * env('USD_TO_IDR', 16452);
        }

        // ==================================================================
        // 3. ESPAYYYYY!!!!!!!!!
        // ==================================================================
        // $no_invoice = 'INV1746195322';
        $timestamp = now()->format('Y-m-d\TH:i:sP');
        $redirect = url('invoice/' . $no_invoice);
        $relativeUrl = '/apimerchant/v1.0/debit/payment-host-to-host';
        $privateKey = openssl_pkey_get_private(file_get_contents(storage_path('keys/private.pem')));
        $publicKey  = openssl_pkey_get_public(file_get_contents(storage_path('keys/public.pub')));
        $url = env('ESPAY_BASE_URL', 'https://sandbox-api.espay.id');

        // Body v.2.0 =======================================================================
        $body = [
            'partnerReferenceNo' => $no_invoice,
            'merchantId' => env('ESPAY_MERCHANT_CODE', 'SGWPTDMP'),
            'subMerchantId' => env('ESPAY_API_KEY', '976846332bc02b07add6e4ed7c2abe71'),
            'amount' => [
                'value' => $total_price,
                'currency' => 'IDR',
            ],
            'urlParam' => [
                'url' => $redirect,
                'type' => 'PAY_RETURN',
                'isDeeplink' => 'N',
            ],
            'pointOfInitiation' => 'Web',
            'payOptionDetails' => [
                'payMethod' => '008',
                'payOption' => 'CREDITCARD',
                'transAmount' => [
                    'value' => $total_price,
                    'currency' => 'IDR',
                ],
                'feeAmount' => [
                    'value' => '0.00',
                    'currency' => 'IDR',
                ],
            ],
            'additionalInfo' => [
                'payType' => 'REDIRECT',
                'userName' => $orderData['first_name'] . ' ' . $orderData['last_name'],
                'userEmail' => $orderData['email'],
                'userPhone' => $orderData['telephone'],
                'productCode' => 'CREDITCARD',
                'balanceType' => 'CASH',
            ],
        ];

        $signatureData = $this->generateEspaySignature($body, $relativeUrl, $timestamp, $privateKey);
        // decode
        $xSignature_decode  = base64_decode($signatureData['xSignature']);
        $verificationResult = openssl_verify($signatureData['stringToSign'], $xSignature_decode, $publicKey, OPENSSL_ALGO_SHA256);

        // Headers =======================================================================
        $headers = [
            'Content-Type' => 'application/json',
            'X-TIMESTAMP' => $timestamp,
            'X-SIGNATURE' => $signatureData['xSignature'],
            'X-EXTERNAL-ID' => $no_invoice,
            'X-PARTNER-ID' => env('ESPAY_MERCHANT_CODE', 'SGWPTDMP'),
            'CHANNEL-ID' => 'ESPAY',
        ];

        // dd((
        //     [$no_invoice, $relativeUrl, $timestamp, $headers, $body, $signatureData['minifiedJson'], $signatureData['stringToSign'], $signatureData['xSignature'], $verificationResult, $total_price]
        // ));

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
            return back()->withErrors(['message' => $response->body()]);
        }
    }

    public function inquiry(Request $request)
    {
        $partnerServiceId   = $request->input('partnerServiceId');
        $customerNo         = $request->input('customerNo');
        $virtualAccountNo   = $request->input('virtualAccountNo');
        $trxDateInit        = $request->input('trxDateInit');
        $inquiryRequestId   = $request->input('inquiryRequestId');

        if ($customerNo !== env('ESPAY_MERCHANT_CODE', 'SGWPTDMP')) {
            return response()->json([
                'responseCode' => '4012400',
                'responseMessage' => 'Unauthorized Signature',
            ], 400);
        }

        $orderData = session('order_data');
        $category = Category::where('id', $orderData['category'])->first();
        $total_price = $category->price * $orderData['quantity'];

        // Konversi USD ke IDR
        if ($category->currency == 'USD') {
            $total_price = $total_price * env('USD_TO_IDR', 16452);
        }

        $response = [
            'responseCode' => '2005400',
            'responseMessage' => 'Success',
            'virtualAccountData' => [
                'partnerServiceId' => $partnerServiceId,
                'customerNo' => $partnerServiceId,
                'virtualAccountNo' => $virtualAccountNo,
                'virtualAccountName' => $orderData['first_name'] . ' ' . $orderData['last_name'],
                'virtualAccountEmail' => $orderData['email'],
                'virtualAccountPhone' => $orderData['telephone'],
                'inquiryRequestId' => $inquiryRequestId,
                'totalAmount' => [
                    'value' => $total_price,
                    'currency' => 'IDR',
                ],
                'billDetails' => [
                    [
                        'billDescription' => [
                            'english' => 'PAQS 2025 Invoice No ' . $partnerServiceId,
                            'indonesia' => 'Tagihan PAQS 2025 No ' . $partnerServiceId,
                        ],
                    ],
                ],
            ],
        ];

        return response()->json($response, 200);
    }

    public function payment(Request $request)
    {
        $order = Order::where('no_invoice', $request->virtualAccountNo)->first();
        $orderData = session('order_data');
        $category = Category::find($orderData['category']);
        $total_price = $category->price * $orderData['quantity'];

        // Jika customerNo tidak sama dengan merchant code
        if ($request->customerNo !== env('ESPAY_MERCHANT_CODE', 'SGWPTDMP')) {
            $reponse_failed = [
                "responseCode" => "4012500",
                "responseMessage" => "Unauthorized Signature"
            ];
            return response()->json($reponse_failed, 200);
        }

        // Jika order sudah dibayar/Double payment
        if ($order->payment_request_id == $request->paymentRequestId) {
            $reponse_failed = [
                "responseCode" => "4042514",
                "responseMessage" => 'Bill has been paid'
            ];
            return response()->json($reponse_failed, 200);
        }

        $order = Order::create([
            'no_invoice'       => $request->virtualAccountNo,
            'title'            => $orderData['title'],
            'first_name'       => $orderData['first_name'],
            'last_name'        => $orderData['last_name'],
            'full_name'        => $orderData['first_name'] . ' ' . $orderData['last_name'],
            'is_member'        => $orderData['member'],
            'member_id'        => $orderData['member_id'] ?? null,
            'association_id'   => $orderData['association'] ?? null,
            'company'          => $orderData['company'],
            'address'          => $orderData['address'],
            'telephone'        => $orderData['telephone'],
            'email'            => $orderData['email'],
            'category_id'      => $orderData['category'],
            'quantity'         => $orderData['quantity'],
            'total_price'      => $total_price,
            'payment_status'   => 'paid',
            'payment_method'   => 'credit_card',
            'is_confirmed'          => true,
            'payment_request_id'    => $request->paymentRequestId,
            'payment_datetime'      => $request->trxDateTime,
        ]);
        $order->update([
            'payment_status' => 'paid',
            'is_confirmed' => true,
            'payment_request_id' => $request->paymentRequestId,
            'payment_datetime' => $request->trxDateTime,
        ]);

        $response = [
            'responseCode' => '2002500',
            'responseMessage' => 'Success',
            'virtualAccountData' => [
                'partnerServiceId' => ' ESPAY',
                'customerNo' => $request->customerNo,
                'virtualAccountNo' => $request->virtualAccountNo,
                'virtualAccountName' => $order->full_name,
                'paymentRequestId' => $request->paymentRequestId,
                'totalAmount' => [
                    'value' => $request->totalAmount['value'],
                    'currency' => $request->totalAmount['currency'],
                ],
                'billDetails' => [
                    [
                        'billDescription' => [
                            'english' => 'Tagihan No ' . $order->no_invoice,
                            'indonesia' => 'Invoice ' . $order->no_invoice,
                        ],
                    ],
                ],
            ],
        ];

        return response()->json($response, 200);
    }
}
