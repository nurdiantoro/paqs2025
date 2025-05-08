<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EspayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public $paymentId;
    public $paymentAmount;
    public $commCode;
    public $bankCode;
    public $productCode;

    public function __construct($paymentId, $paymentAmount, $commCode, $bankCode, $productCode)
    {
        $this->paymentId = $paymentId;
        $this->paymentAmount = $paymentAmount;
        $this->commCode = $commCode;
        $this->bankCode = $bankCode;
        $this->productCode = $productCode;
        // parent::__construct($resource);
    }

    public function toArray(Request $request): array
    {
        return [
            [
                "responseCode" => "2002400",
                "responseMessage" => "Success",
                "virtualAccountData" => [
                    "partnerServiceId" => " Espay",
                    "customerNo" => $this->commCode,
                    "virtualAccountNo" => "DIGOERDER00001",
                    "virtualAccountName" => "Jokul Doe",
                    "virtualAccountEmail" => "john@email.com",
                    "virtualAccountPhone" => "6281828384858",
                    "inquiryRequestId" => "abcdef-123456-abcdef",
                    "totalAmount" => [
                        "value" => $this->paymentAmount,  // Memasukkan paymentAmount dari request
                        "currency" => "IDR"
                    ],
                    "billDetails" => [
                        [
                            "billDescription" => [
                                "english" => "Tagihan No 123456",
                                "indonesia" => "Invoice No 123456"
                            ]
                        ]
                    ],
                    "additionalInfo" => [
                        "token" => "2023011167618274122",
                        "transactionDate" => "2022-08-21T14:56:11+07:00",
                        "dataMerchant" => [
                            "kodeCa" => "880105",
                            "kodeSubCa" => "-",
                            "noKontrak" => "060223118342",
                            "namaPelanggan" => "Yories Yolanda",
                            "angsuranKe" => 15,
                            "jmlBayarExcAdm" => 5000000.00,
                            "denda" => 0.00,
                            "feeCa" => 5000.00,
                            "feeSwitcher" => 0.00,
                            "totalAdmin" => 5000.00,
                            "jumlahBayar" => 5005000.00,
                            "minimumAmount" => 2000000.00,
                            "totalAngsuran" => 48,
                            "customer" => [
                                "email" => "test@gmail.com"
                            ],
                            "jatuhTempo" => "2025-03-10",
                            "listBills" => [
                                [
                                    "billCode" => 01,
                                    "billName" => "Bill Invoice 1",
                                    "billAmount" => [
                                        "value" => "70000.00",
                                        "currency" => "IDR"
                                    ],
                                    "billSubCompany" => "00001"
                                ],
                                [
                                    "billCode" => 02,
                                    "billName" => "Bill Invoice 2",
                                    "billAmount" => [
                                        "value" => "50000.00",
                                        "currency" => "IDR"
                                    ],
                                    "billSubCompany" => "00002"
                                ]
                            ],
                            "shippingAddress" => [
                                "firstName" => "Jokul",
                                "lastName" => "Doe",
                                "address" => "Jl. Teknologi Indonesia No. 25",
                                "city" => "Jakarta",
                                "postalCode" => "12960",
                                "phoneNumber" => "6281828384858",
                                "countryCode" => "IDN"
                            ],
                            "items" => [
                                [
                                    "id" => "1",
                                    "name" => "Newlook Charm",
                                    "price" => "10000",
                                    "type" => "Contact Lens",
                                    "url" => "https://domain.com/products/detail?id=1",
                                    "quantity" => "1"
                                ],
                                [
                                    "id" => "2",
                                    "name" => "Newlook Playful",
                                    "price" => "10000",
                                    "type" => "Contact Lens",
                                    "url" => "https://domain.com/products/detail?id=2",
                                    "quantity" => "1"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
