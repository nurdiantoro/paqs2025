<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body style="background-color: rgb(226 232 240); font-family: Inter, sans-serif">
    <div style="font-size: 14px; color: #777777; max-width: 600px; margin: 0 auto">
        <div style="padding: 1.5rem">
            <div
                style="background-color: #fff;color: #000; border-radius: 0.75rem; padding: 1.5rem; font-family: '  Inter', sans-serif">
                <a href="https://paqs2025.com">
                    <img src="https://paqs2025.com/img/LOGO%20PAQS%20CONGRESS.png" alt="PAQS logo"
                        style="max-width: 150px; margin: 0px auto; display: block; margin-bottom: 20px">
                </a>
                <div style="text-align: center; font-size: 2rem; font-weight: bold">
                    Your Tickets</div>
                <p style="margin-bottom: 20px; text-align: center">Bring the ticket to entry the PAQS Congress 2025</p>
                <div style="">
                    <?php $i = 1; ?>
                    @foreach ($tickets as $ticket)
                        <?php \Storage::disk('public')->put($ticket->barcode . '.png', base64_decode(DNS2D::getBarcodePNG($ticket->barcode, 'QRCODE', 20, 20))); ?>
                        <div style="text-align: center;">
                            <div style="padding: 8px">
                                <div style="padding: 20px; border: 1px solid #dee2e6; border-radius: 12px">

                                    {{-- Untuk Production --}}
                                    {{-- <img style="max-width: 120px; height: fit-content" src={{ ' https://paqs2025.com/storage/' . $ticket->barcode . '.png' }} alt="Logo"> --}}

                                    {{-- Untuk Local --}}
                                    <img style="max-width: 100px; height: fit-content; margin-bottom: 8px"
                                        src={{ asset('storage/' . $ticket->barcode . '.png') }}
                                        alt="#{{ $ticket->barcode }}">
                                    <div style="font-weight: bold; margin: 4px">Ticket {{ $i }}</div>
                                    <div style="font-weight: bold;">#{{ $ticket->barcode }}</div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    @endforeach
                </div>

                <a href="https://paqs2025.com/invoice/{{ $data->no_invoice }}"
                    style="font-weight: bold; display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #ff007a; font-size: 16px; margin-bottom: 20px">
                    Manage Your Tickets
                </a>

                <div style="margin-top: 20px;padding-top: 20px; text-align: center; border-top: 1px solid #dee2e6">
                    www.paqs2025.com</div>
            </div>
        </div>
        </main>
</body>

</html>
