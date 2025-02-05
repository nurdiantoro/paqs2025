<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body style="background-color: rgb(226 232 240); font-family: Inter, sans-serif">
    <main style="font-size: 14px; color: #777777">
        <div style="padding: 1.5rem">
            <div style="background-color: #fff; border-radius: 0.75rem; padding: 1.5rem">
                <div>
                    <div
                        style="display: flex; justify-content: flex-start; gap: 1rem; width: 100%; margin-bottom: 25px; line-height: 1.5rem">
                        {{-- <img style="max-width: 120px; height: fit-content"
                            src="https://paqs2025.com/img/LOGO%20PAQS%20CONGRESS.png" alt="Logo"> --}}
                        <img style="max-width: 120px; height: fit-content" src="{{ $message->embed($logo) }}"
                            alt="Logo">

                        <div style="margin-left: 25px">
                            <span class="font-semibold text-black" style="margin: 0px; font-weight: 600; color: #000;">
                                Invoice No:
                                <Span class="font-bold text-black"
                                    style="margin: 0px; color: #000; font-weight: 800">#{{ $data->no_invoice }}</Span>
                            </span>
                            <div style="margin: 0px; color: #47759d">
                                <span>
                                    Date: {{ date_format($data->created_at, 'd F Y') }} <br>
                                </span>
                                <span>Status: {{ $data->payment_status }}</span>
                            </div>
                        </div>
                    </div>

                    <div style="height: 1px; background-color: #ececef; width: 100%; margin-bottom: 30px"></div>
                    <div style="margin-bottom: 30px">
                        <div>
                            <b style="color: #000">Invoice To:</b>
                            <p style="color: #47759d">
                                {{ $data->full_name }}, <br />
                                {{ $data->address }}, <br />
                                {{ $data->email }}
                            </p>
                        </div>
                    </div>
                    <div
                        style="border: 1px solid #eaeaea; border-radius: 0.75rem; overflow-x: auto; margin-bottom: 50px">
                        <table style="width: 100%; color: #000; border-spacing: 0">
                            <thead>
                                <tr style="background: #f7f7f7">
                                    <th style="padding: 12px 15px; font-weight: 600; text-align: left;">Category</th>
                                    <th style="padding: 12px 15px; font-weight: 600; text-align: left;">Price</th>
                                    <th style="padding: 12px 15px; font-weight: 600; text-align: left;">QTY</th>
                                    <th style="padding: 12px 15px; font-weight: 600; text-align: right;">Total
                                        Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 12px 15px; text-wrap: nowrap;">
                                        {{ $category->name }}
                                    </td>
                                    <td style="padding: 12px 15px;">
                                        {{ number_format($category->price, 0, ',', '.') }}
                                    </td>
                                    <td style="padding: 12px 15px;">
                                        {{ $data->quantity }}
                                    </td>
                                    <td style="padding: 12px 15px; text-align: right">
                                        {{ number_format($total_category, 0, ',', '.') }}
                                    </td>
                                </tr>
                                @if ($addon != null)
                                    <tr>
                                        <td style="padding: 12px 15px;">
                                            {{ $addon->name }}
                                        </td>
                                        <td style="padding: 12px 15px;">
                                            {{ number_format($addon->price, 0, ',', '.') }}
                                        </td>
                                        <td style="padding: 12px 15px;">
                                            {{ $data->quantity }}
                                        </td>
                                        <td style="padding: 12px 15px; text-align: right">
                                            {{ number_format($total_addon, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endif
                                <tr class="border-t border-[#eaeaea] border-dashed">
                                    <td style="padding: 12px 15px;">
                                        Total
                                    </td>
                                    <td style="padding: 12px 15px;"></td>
                                    <td style="padding: 12px 15px;"></td>
                                    <td
                                        style="padding: 12px 15px; text-align: right; font-weight: 600; text-wrap: nowrap;">
                                        {{ $category->currency . ' ' . number_format($total_price, 0, ',', '.') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cs-note_right" style="overflow-x: auto;margin-bottom: 20px">
                        <table class="border-none">
                            <tr>
                                <td style="padding:0px 10px; text-wrap: nowrap;">Contact</td>
                                <td style="padding:0px 10px">:</td>
                                <td style="padding:0px 10px">info@paqs2025.com for details.</td>
                            </tr>
                            <tr>
                                <td style="padding:0px 10px; text-wrap: nowrap;">Payment method</td>
                                <td style="padding:0px 10px">:</td>
                                <td style="padding:0px 10px">Bank Transfer.</td>
                            </tr>
                            <tr>
                                <td style="padding:0px 10px; text-wrap: nowrap;">Bank Name</td>
                                <td style="padding:0px 10px">:</td>
                                <td style="padding:0px 10px">BCA Cab. Andalas Kota Makassar</td>
                            </tr>
                            <tr>
                                <td style="padding:0px 10px; text-wrap: nowrap;">Beneficiary</td>
                                <td style="padding:0px 10px">:</td>
                                <td style="padding:0px 10px">PT Debindo Mega Promo</td>
                            </tr>
                            <tr>
                                <td style="padding:0px 10px; text-wrap: nowrap;">Account Number</td>
                                <td style="padding:0px 10px">:</td>
                                <td style="padding:0px 10px">1589766766</td>
                            </tr>
                            <tr>
                                <td style="padding:0px 10px; text-wrap: nowrap;">SWIFT Code</td>
                                <td style="padding:0px 10px">:</td>
                                <td style="padding:0px 10px">CENAIDJA or CENAIDJAXXX</td>
                            </tr>
                            <tr>
                                <td style="padding:0px 10px; text-wrap: nowrap;"><strong>Important</strong></td>
                                <td style="padding:0px 10px">:</td>
                                <td style="padding:0px 10px">Please use your full name as the reference for your
                                    bank
                                    transfer.</td>
                            </tr>
                        </table>
                    </div>

                    <a href="https://paqs2025.com/invoice/{{ $data->no_invoice }}"
                        class="text-center rounded text-white bg-[#0c6196] p-2 mx-auto block my-5"
                        style="text-align: center; border-radius: 5px; background-color: #0c6196; color: #fff; display: block; padding: 10px; text-align: center; text-decoration: none; width: 100%;">
                        <span>Upload Payment</span>
                    </a>

                    <p class="text-center mt-5 text-gray-500" style="text-align: center; margin-bottom: 20px">
                        Contact info@paqs2025.com for details.
                    </p>

                </div>
            </div>
        </div>
    </main>
</body>

</html>
