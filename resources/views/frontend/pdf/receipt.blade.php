<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ 'Receipt #' . $data->no_invoice . ' - ' . date_format($data->created_at, 'd F Y') }}</title>

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 100;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 200;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 300;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 600;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Inter';
            src: url({{ asset('fonts/inter/Inter_18pt-Black.ttf') }}) format("truetype");
            font-weight: 800;
            font-style: normal;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
    <main style="font-size: 14px; color: #777777">
        <div style="">
            <div style="background-color: #fff; border-radius: 0.75rem; padding: 1.5rem">
                <div>
                    <div
                        style="display: flex; justify-content: flex-start; gap: 1rem; width: 100%; margin-bottom: 25px; line-height: 1.5rem">
                        {{-- <img style="max-width: 120px; height: fit-content" src="{{ $logo }}" alt="Logo"> --}}
                        <img style="max-width: 120px; height: fit-content"
                            src="data:image/png;base64,{{ $logo }}">


                        <div style="margin-left: 25px">
                            <span style="margin: 0px; font-weight: 600; color: #000;">
                                Receipt No:
                                <Span
                                    style="margin: 0px; color: #000; font-weight: 800">#{{ $data->no_invoice }}</Span>
                            </span>
                            <div style="margin: 0px; color: #47759d">
                                <span>
                                    Date: {{ date_format($data->created_at, 'd F Y') }} <br>
                                </span>
                                <span>
                                    Status : @if ($data->payment_status == 'paid')
                                        @if ($data->is_confirmed == true)
                                            Paid
                                        @else
                                            waiting for confirmation
                                        @endif
                                    @else
                                        Unpaid
                                    @endif <br>
                                </span>

                            </div>
                        </div>
                    </div>

                    <div style="height: 1px; background-color: #ececef; width: 100%; margin-bottom: 30px"></div>
                    <div
                        style="margin-bottom: 30px; display: flex; justify-content: space-between; flex-direction: row">
                        <div>
                            <b style="color: #000">Invoice To:</b>
                            <p style="color: #47759d">
                                {{ $data->full_name }}, <br />
                                {{ $data->address }}, <br />
                                {{ $data->email }}
                            </p>
                        </div>
                        <div>
                            <div
                                style="font-weight: bold; font-size:3.7rem; opacity: 0.5; color: #47759d; text-transform: capitalize;">
                                @if ($data->payment_status == 'paid')
                                    @if ($data->is_confirmed == true)
                                        Paid
                                    @else
                                        Unpaid
                                    @endif
                                @else
                                    Unpaid
                                @endif
                            </div>
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
                                        {{ number_format($data->total_price, 2, ',', '.') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 15px;">
                                        Total
                                    </td>
                                    <td style="padding: 12px 15px;"></td>
                                    <td style="padding: 12px 15px;"></td>
                                    <td
                                        style="padding: 12px 15px; text-align: right; font-weight: 600; text-wrap: nowrap;">
                                        {{ $category->currency . ' ' . number_format($data->total_price, 2, ',', '.') }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p style="text-align: center; margin-bottom: 20px">
                        Contact info@paqs2025.com for details.
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
