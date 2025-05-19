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
        // 1. Insert data order ke database PAQS
        // 2. Cek apakah payment pakai credit card atau manual
        // 3. Jika USD, dikonvert dulu jadi IDR
        // 4. ESPAYYYYY!!!!!!!!
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
        // 1. Insert data order ke database PAQS
        // ==================================================================
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
            'proof_of_payment' => $orderData['proof_of_payment'] ?? null,
        ]);


        // ==================================================================
        // 2. Cek apakah payment pake credit card
        // 2a. kalau gak ada, langsung kirim email tagihan yang nantinya redirect ke halaman invoice
        // ==================================================================
        if ($request->payment !== 'credit_card') {
            return redirect(url('email/' . $no_invoice . '/' . $order->email));
        }


        // ==================================================================
        // 3. Konversi USD Ke IDR
        // ==================================================================
        if ($category->currency == 'USD') {
            $total_price = $total_price * env('USD_TO_IDR', 16452);
        }

        // ==================================================================
        // 4. ESPAYYYYY!!!!!!!!!
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
                'userName' => $order->full_name,
                'userEmail' => $order->email,
                'userPhone' => $order->telephone,
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
            return back()->withErrors(['message' => 'Terjadi kesalahan saat memproses pembayaran.']);
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

        $order = Order::where('no_invoice', $virtualAccountNo)->first();
        $order->update(['inquiry_request_id' => $inquiryRequestId]);
        $category = Category::where('id', $order->category_id)->first();

        if ($category->currency == 'USD') {
            $total_price = $order->total_price * env('USD_TO_IDR', 16452);
        } else {
            $total_price = $order->total_price;
        }

        $response = [
            'responseCode' => '2002400',
            'responseMessage' => 'Success',
            'virtualAccountData' => [
                'partnerServiceId' => $partnerServiceId,
                'customerNo' => $partnerServiceId,
                'virtualAccountNo' => $virtualAccountNo,
                'virtualAccountName' => $order->full_name,
                'virtualAccountEmail' => $order->email,
                'virtualAccountPhone' => $order->telephone,
                'inquiryRequestId' => $inquiryRequestId,
                'totalAmount' => [
                    'value' => $total_price,
                    'currency' => 'IDR',
                ],
                'billDetails' => [
                    [
                        'billDescription' => [
                            'english' => 'PAQS 2025 Invoice No ' . $order->no_invoice,
                            'indonesia' => 'Tagihan PAQS 2025 No ' . $order->no_invoice,
                        ],
                    ],
                ],
                // 'additionalInfo' => [
                //     'token' => '2023011167618274122',
                //     'transactionDate' => now()->format('Y-m-d\TH:i:sP'),
                //     'dataMerchant' => [
                //         'kodeCa' => '880105',
                //         'kodeSubCa' => '-',
                //         'noKontrak' => '060223118342',
                //         'namaPelanggan' => 'Yories Yolanda',
                //         'angsuranKe' => '15',
                //         'jmlBayarExcAdm' => 5000000.00,
                //         'denda' => 0.00,
                //         'feeCa' => 5000.00,
                //         'feeSwitcher' => 0.00,
                //         'totalAdmin' => 5000.00,
                //         'jumlahBayar' => 5005000.00,
                //         'minimumAmount' => 2000000.00,
                //         'totalAngsuran' => 48,
                //         'customer' => [
                //             'email' => 'test@gmail.com',
                //         ],
                //         'jatuhTempo' => '2025-03-10',
                //         'listBills' => [
                //             [
                //                 'billCode' => '01',
                //                 'billName' => 'Bill Invoice 1',
                //                 'billAmount' => [
                //                     'value' => '70000.00',
                //                     'currency' => 'IDR',
                //                 ],
                //                 'billSubCompany' => '00001',
                //             ],
                //             [
                //                 'billCode' => '02',
                //                 'billName' => 'Bill Invoice 2',
                //                 'billAmount' => [
                //                     'value' => '50000.00',
                //                     'currency' => 'IDR',
                //                 ],
                //                 'billSubCompany' => '00002',
                //             ],
                //         ],
                //         'shippingAddress' => [
                //             'firstName' => 'Jokul',
                //             'lastName' => 'Doe',
                //             'address' => 'Jl. Teknologi Indonesia No. 25',
                //             'city' => 'Jakarta',
                //             'postalCode' => '12960',
                //             'phoneNumber' => '6281828384858',
                //             'countryCode' => 'IDN',
                //         ],
                //         'items' => [
                //             [
                //                 'id' => '1',
                //                 'name' => 'Newlook Charm',
                //                 'price' => '10000',
                //                 'type' => 'Contact Lens',
                //                 'url' => 'https://domain.com/products/detail?id=1',
                //                 'quantity' => '1',
                //             ],
                //             [
                //                 'id' => '2',
                //                 'name' => 'Newlook Playful',
                //                 'price' => '10000',
                //                 'type' => 'Contact Lens',
                //                 'url' => 'https://domain.com/products/detail?id=2',
                //                 'quantity' => '1',
                //             ],
                //         ],
                //     ],
                // ],
            ],
        ];

        return response()->json($response, 200);
    }

    public function paymentNotification(Request $request)
    {
        $rq_uuid = $request->input('rq_uuid');
        $rq_datetime = $request->input('rq_datetime');
        $password = $request->input('password');
        $signature = $request->input('signature');
        $member_id = $request->input('member_id');
        $comm_code = $request->input('comm_code');
        $order_id = $request->input('order_id');
        $ccy = $request->input('ccy');
        $amount = $request->input('amount');
        $debit_from_bank = $request->input('debit_from_bank');
        $debit_from = $request->input('debit_from');
        $debit_from_name = $request->input('debit_from_name');
        $credit_to_bank = $request->input('credit_to_bank');
        $credit_to = $request->input('credit_to');
        $credit_to_name = $request->input('credit_to_name');
        $product_code = $request->input('product_code');
        $message = $request->input('message');
        $payment_datetime = $request->input('payment_datetime');
        $payment_ref = $request->input('payment_ref');
        $approval_code_full_bca = $request->input('approval_code_full_bca');
        $approval_code_installment_bca = $request->input('approval_code_installment_bca');

        $response = [
            "rq_uuid" => $rq_uuid,
            "rs_datetime" => now()->format('Y-m-d\TH:i:sP'),
            "error_code" => "0000",
            "error_message" => "Success",
            "signature" => $signature,
            "order_id" => $order_id,
            "reconcile_id" => "2020100121183111",
            "reconcile_datetime" => now()->format('Y-m-d\TH:i:sP')
        ];

        $response_failed = [
            "rq_uuid" => "ebf8e9df-639e-424f-8148-94d2741edd03",
            "rs_datetime" => "2024-04-01T22:55:14+07:00",
            "error_code" => "0014",
            "error_message" => "invalid order id"
        ];


        $order = Order::where('no_invoice', $order_id)->first();
        if (!$order) {
            return response()->json($response_failed, 200);
        }

        $order->update([
            'payment_status' => 'paid',
            'is_confirmed' => true,
            'payment_datetime' => $payment_datetime,
        ]);

        EspayPayment::create([
            'rq_uuid' => $rq_uuid,
            'rq_datetime' => $rq_datetime,
            'password' => $password,
            'signature' => $signature,
            'member_id' => $member_id,
            'comm_code' => $comm_code,
            'order_id' => $order_id,
            'ccy' => $ccy,
            'amount' => $amount,
            'debit_from_bank' => $debit_from_bank,
            'debit_from' => $debit_from,
            'debit_from_name' => $debit_from_name,
            'credit_to_bank' => $credit_to_bank,
            'credit_to' => $credit_to,
            'credit_to_name' => $credit_to_name,
            'product_code' => $product_code,
            'message' => $message,
            'payment_datetime' => $payment_datetime,
            'payment_ref' => $payment_ref,
            'approval_code_full_bca' => $approval_code_full_bca,
            'approval_code_installment_bca' => $approval_code_installment_bca,

        ]);

        return response()->json($response, 200);
    }

    public function payment(Request $request)
    {
        $order = Order::where('no_invoice', $request->virtualAccountNo)->first();

        if ($request->customerNo !== env('ESPAY_MERCHANT_CODE', 'SGWPTDMP')) {
            $message = 'Unauthorized Signature';
            if (!$order) {
                $message = 'Order not found';
            }
            $reponse_failed = [
                "responseCode" => "4012500",
                "responseMessage" => $message
            ];
            return response()->json($reponse_failed, 200);
        }

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
