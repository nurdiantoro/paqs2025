<?php

namespace App\Http\Controllers;

use App\Http\Resources\EspayResource;
use App\Models\Category;
use App\Models\EspayPayment;
use App\Models\Order;
use App\Models\Ticket;
use Carbon\Carbon;
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
            'payment_method'   => $request->payment,
            'proof_of_payment' => $orderData['proof_of_payment'] ?? null,
        ]);
        session()->forget('order_data');
        // ==================================================================
        // ==================================================================
        // 2. Cek apakah payment pake credit card
        // 2a. kalau gak ada, langsung kirim email tagihan yang nantinya redirect ke halaman invoice
        // ==================================================================
        if ($request->payment == 'manual') {
            return redirect(url('email/' . $no_invoice . '/' . $order->email));
        }
        // ==================================================================
        // ==================================================================
        // 3. Konversi USD Ke IDR
        // ==================================================================
        if ($category->currency == 'USD') {
            $total_price = $total_price * env('USD_TO_IDR', 16452);
        }
        // ==================================================================
        // ==================================================================
        // 4. ESPAYYYYY -> Credit Card atau Virtual Account
        // 4a. ESPAYYYYY -> Credit Card
        // ==================================================================
        if ($request->payment == 'credit_card') {
            $timestamp = now()->format('Y-m-d\TH:i:sP');
            $redirect = url('invoice/' . $no_invoice);
            $relativeUrl = '/apimerchant/v1.0/debit/payment-host-to-host';
            $privateKey = openssl_pkey_get_private(file_get_contents(storage_path('keys/private.pem')));
            $url = env('ESPAY_BASE_URL', 'https://sandbox-api.espay.id');
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
                'validUpTo' => Carbon::now()->addHours(2)->toIso8601String(),
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
            $headers = [
                'Content-Type' => 'application/json',
                'X-TIMESTAMP' => $timestamp,
                'X-SIGNATURE' => $signatureData['xSignature'],
                'X-EXTERNAL-ID' => $no_invoice,
                'X-PARTNER-ID' => env('ESPAY_MERCHANT_CODE', 'SGWPTDMP'),
                'CHANNEL-ID' => 'ESPAY',
            ];
            $order->update([
                'x_signature' => $signatureData['xSignature'],
                'x_timestamp' => $timestamp
            ]);
            //
            // dd((
            //     [$no_invoice, $relativeUrl, $timestamp, $headers, $body, $signatureData['minifiedJson'], $signatureData['stringToSign'], $signatureData['xSignature'], $verificationResult, $total_price]
            // ));
            //
            $response = Http::withHeaders($headers)->post($url . $relativeUrl, $body);
            //
            // dd($response->body());
            //
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
        // ==================================================================
        // ==================================================================
        // 4b. ESPAYYYYY -> Virtual Account
        // ==================================================================
        elseif ($request->payment == 'virtual_account') {
            // Variable untuk Signature
            $signatureKey   = env('ESPAY_SIGNATURE', '1uq3l0np1hq9l5hu');
            $rq_uuid        = Str::uuid()->toString();
            $rq_datetime    = Carbon::now()->format('Y-m-d H:i:s');
            $order_id       = $order->no_invoice;
            $ccy            = 'IDR';
            $comm_code      = env('ESPAY_MERCHANT_CODE', 'SGWPTDMP');
            $action         = 'SENDINVOICE';
            //
            // Membuat signature
            $raw_string = strtoupper("##{$signatureKey}##{$rq_uuid}##{$rq_datetime}##{$order_id}##{$total_price}##{$ccy}##{$comm_code}##{$action}##");
            $signature = hash('sha256', $raw_string);
            //
            // response
            $response = Http::asForm()->post('https://sandbox-api.espay.id/rest/merchantpg/sendinvoice', [
                'rq_uuid'       => $rq_uuid,
                'rq_datetime'   => $rq_datetime,
                'order_id'      => $order_id,
                'amount'        => $total_price,
                'ccy'           => 'IDR',
                'comm_code'     => $comm_code,
                'remark1'       => $order->telephone,
                'remark2'       => $order->full_name,
                'remark3'       => $order->email,
                'update'        => 'N',
                'bank_code'     => '008',
                'va_expired'    => '120',
                'signature'     => $signature,
            ]);
            if ($response->successful()) {
                $order->update([
                    'va_number' => $response->json()['va_number'],
                    'valid_to' => $response->json()['expired'],
                    'total_amount' => $response->json()['total_amount'],
                    'admin_fee' => $response->json()['fee'],
                ]);
                // return response()->json($response->json());
                return redirect(url('email/' . $order->no_invoice . '/' . $order->email));
            }
            return response()->json(['error' => 'Gagal membuat Virtual Account', $response->json()], 500);
        }
    }

    public function inquiry(Request $request)
    {
        // ================================================================================
        // RINGKASAN
        // 0. Ambil semua data yang dikirim
        // 1. Cek apakah semua header ada dan tidak kosong
        // 2. Cek format partnerReferenceNo
        // 3. Cek signature
        // 4. Update data ke database (inquiry_request_id)
        // 5. Cek jika order tidak ditemukan
        // 6. Cek jika bill sudah dibayar
        // 7. Cek jika bill sudah expired
        // 8. Update data ke database (inquiry_request_id)
        // 9. Ubah USD ke IDR
        // 10. Response
        // ================================================================================
        // ================================================================================
        // 0. Ambil semua data yang dikirim
        // ================================================================================
        $partnerServiceId   = $request->input('partnerServiceId');
        $customerNo         = $request->input('customerNo');
        $virtualAccountNo   = $request->input('virtualAccountNo');
        $trxDateInit        = $request->input('trxDateInit');
        $inquiryRequestId   = $request->input('inquiryRequestId');
        // ================================================================================
        // ================================================================================
        // 1. Cek apakah semua header ada dan tidak kosong (Optional)
        // ================================================================================
        $requiredHeaders = ['Content-Type', 'X-TIMESTAMP', 'X-SIGNATURE', 'X-EXTERNAL-ID', 'X-PARTNER-ID', 'CHANNEL-ID',];
        $missing = [];
        foreach ($requiredHeaders as $header) {
            if (empty($request->header($header))) {
                $missing[] = $header;
            }
        }
        if (!empty($missing)) {
            return response()->json([
                'responseCode' => '4012400',
                'responseMessage' => 'Unauthorized Signature',
                'responseCode' => '4005402',
                'message' => 'Missing Mandatory Field {' . implode(', ', $missing) . '}',
            ], 400);
        }
        // ================================================================================
        // ================================================================================
        // 2. Cek format partnerReferenceNo (Optional)
        // ================================================================================
        if (preg_match('/[^a-zA-Z0-9\s]/', $virtualAccountNo)) {
            return response()->json([
                'responseCode' => '4005401',
                'responseMessage' => 'Invalid Field Format virtualAccountNo',
            ], 400);
        }
        // ================================================================================
        // ================================================================================
        // 3. Cek signature (Optional)
        // ================================================================================
        $publicKey  = openssl_pkey_get_public(file_get_contents(storage_path('keys/public.pub')));
        $relativeUrl = '/api/v1.0/transfer-va/inquiry';
        $xTimestamp = request()->header('X-TIMESTAMP');
        $xSignature = request()->header('X-SIGNATURE');
        // decode
        $requestSignature = base64_decode($xSignature);
        $body = file_get_contents('php://input');
        $bodyDecoded = json_decode($body, true);
        $bodyReencoded = json_encode($bodyDecoded, JSON_UNESCAPED_SLASHES);
        $stringToSign = 'POST' . ':' . $relativeUrl . ':' . strtolower(hash('sha256', $bodyReencoded)) . ':' . $xTimestamp;
        $verificationResult = openssl_verify($stringToSign, $requestSignature, $publicKey, 'sha256WithRSAEncryption');
        if ($verificationResult == false) {
            return response()->json([
                'responseCode' => '4015400',
                'responseMessage' => 'Unauthorized Signature',
            ], 400);
        }
        // ================================================================================
        // ================================================================================
        // 5. Cek jika order tidak ditemukan
        // ================================================================================
        $order = Order::where('no_invoice', $virtualAccountNo)->first();
        if (!$order) {
            return response()->json([
                'responseCode' => '4042412',
                'responseMessage' => 'Bill not found',
            ], 400);
        }
        // ================================================================================
        // ================================================================================
        // 6. Cek jika bill sudah dibayar
        // ================================================================================
        if ($order->payment_request_id != NULL && $order->payment_status == 'paid') {
            return response()->json([
                'responseCode' => '4042414',
                'responseMessage' => 'Bill has been paid',
            ], 400);
        }
        // ================================================================================
        // ================================================================================
        // 7. Cek jika bill sudah expired
        // ================================================================================
        if ($order->valid_to < Carbon::now()) {
            return response()->json([
                'responseCode' => '4042419',
                'responseMessage' => 'Bill expired',
            ], 400);
        }
        // ================================================================================
        // ================================================================================
        // 8. Update data ke database (inquiry_request_id)
        // ================================================================================
        $order->update(['inquiry_request_id' => $inquiryRequestId]);
        $category = Category::where('id', $order->category_id)->first();
        // ================================================================================
        // ================================================================================
        // 9. Ubah USD ke IDR
        // ================================================================================
        if ($category->currency == 'USD') {
            $total_price = $order->total_price * env('USD_TO_IDR', 16452);
        } else {
            $total_price = $order->total_price;
        }
        // ================================================================================
        // ================================================================================
        // 10. Response
        // ================================================================================
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
            ],
        ];
        return response()->json($response, 200);
    }

    public function payment(Request $request)
    {
        $order = Order::where('no_invoice', $request->virtualAccountNo)->first();
        // ==================================================================
        // ==================================================================
        // 1. Jika order tidak ditemukan
        // ==================================================================
        if (!$order) {
            $message = 'Bill not found';
            $reponse_failed = [
                "responseCode" => "4042512",
                "responseMessage" => $message
            ];
            return response()->json($reponse_failed, 200);
        }
        // ==================================================================
        // ==================================================================
        // 2. Jika order Sudah dibayar
        // ==================================================================
        if ($order->payment_request_id == $request->paymentRequestId) {
            $reponse_failed = [
                "responseCode" => "4042514",
                "responseMessage" => 'Bill has been paid'
            ];
            return response()->json($reponse_failed, 200);
        }
        // ==================================================================
        // ==================================================================
        // 4. Pembayaran Berhasil
        // ==================================================================
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
            'additionalInfo' => [
                'reconcileId' => now()->format('YmdHis') . random_int(10, 99),
                'reconcileDatetime' => now()->toIso8601String()
            ],
        ];
        return response()->json($response, 200);
    }
}
