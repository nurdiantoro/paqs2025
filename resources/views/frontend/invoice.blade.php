@include('frontend.components.header')
@include('frontend.components.navbar')


<!-- main-area -->
<main>
    <div class="cs-container tm-consulting mt-140 min-h-screen">
        <div class="cs-invoice cs-style1">

            {{-- INVOICE --}}
            <div class="cs-invoice_in " id="download_section">

                {{-- INVOICE HEADER --}}
                <div class="cs-type1 cs-mb25 flex-horizontal-center space-between">
                    <div class="cs-invoice_left">
                        <div class="cs-logo cs-mb5 tm-align-item-center flex-wrap">
                            <img class="cs-mr20 max-width120" src="{{ asset('img/LOGO PAQS CONGRESS.png') }}"
                                alt="Logo">
                            <div class="tm-right-logo">
                                <p class="cs-invoice_number cs-primary_color cs-mb3 cs-f18">
                                    <span>
                                        <?php echo $data->is_confirmed ? 'Receipt' : 'Invoice'; ?>
                                        No:</span>
                                    <Span class="cs-semi_bold">#{{ $data->no_invoice }}</Span>
                                </p>
                                <div class="">
                                    <p class="cs-mb0 cs-f14">
                                        Date: {{ date_format($data->created_at, 'd F Y') }} <br>
                                    </p>
                                    <p>Status:
                                        @if ($data->payment_status == 'paid')
                                            @if ($data->is_confirmed == true)
                                                Paid
                                            @else
                                                waiting for confirmation
                                            @endif
                                        @else
                                            Unpaid
                                        @endif
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- INVOICE BODY --}}
                <div class="tm-border-1px cs-mb30"></div>
                <div class="display-flex cs-mb30 flex-wrap justify-between gap-135">
                    <div class="cs-invoice_left items-center">
                        <b class="cs-primary_color cs-f16">
                            <?php echo $data->is_confirmed ? 'Receipt' : 'Invoice'; ?> To:</b>
                        <p>
                            {{ $data->full_name }}, <br />
                            {{ $data->address }}, <br />
                            {{ $data->email }}
                        </p>
                    </div>
                    @if ($data->payment_status == 'paid')
                        @if ($data->is_confirmed == true)
                            <div
                                class="font-bold text-6xl text-warna-01 opacity-50 flex justify-center items-center rounded-xl">
                                Paid
                            </div>
                        @endif
                    @else
                        <div
                            class="font-bold text-6xl text-warna-01 opacity-50 flex justify-center items-center rounded-xl">
                            Unpaid
                        </div>
                    @endif
                </div>

                {{-- INVOICE TABLE --}}
                <div class="cs-table cs-style2 cs-mb50">
                    <div class="cs-round_border tm-border-radious-12">
                        <div class="cs-table_responsive">
                            <table>
                                <thead>
                                    <tr class="tm-bg-gray tm-border tm-consult-thead">
                                        <th class="cs-width_5 cs-semi_bold cs-primary_color">Category</th>
                                        <th class="cs-width_2 cs-semi_bold cs-primary_color">Price</th>
                                        <th class="cs-width_2 cs-semi_bold cs-primary_color">QTY</th>
                                        <th class="cs-width_2 cs-semi_bold cs-primary_color cs-text_right">Total Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cs-width_5 cs-primary_color cs-f15">
                                            {{ $category->name }}
                                        </td>
                                        <td class="cs-width_2 cs-primary_color cs-f15">
                                            {{ number_format($category->price, 0, ',', '.') }}
                                        </td>
                                        <td class="cs-width_2 cs-primary_color cs-f15">
                                            {{ $data->quantity }}
                                        </td>
                                        <td class="cs-width_2 cs-text_right cs-primary_color cs-f15">
                                            {{ number_format($data->total_price, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                    @if ($addon != null)
                                        <tr>
                                            <td class="cs-width_5 cs-primary_color cs-f15">
                                                {{ $addon->name }}
                                            </td>
                                            <td class="cs-width_2 cs-primary_color cs-f15">
                                                {{ number_format($addon->price, 0, ',', '.') }}
                                            </td>
                                            <td class="cs-width_2 cs-primary_color cs-f15">
                                                {{ $data->quantity }}
                                            </td>
                                            <td class="cs-width_2 cs-text_right cs-primary_color cs-f15">
                                                {{ number_format($total_addon, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="cs-width_5 cs-primary_color cs-f15">
                                            Total
                                        </td>
                                        <td class="cs-width_2"></td>
                                        <td class="cs-width_2"></td>
                                        <td class="cs-width_2 cs-text_right cs-semi_bold cs-primary_color cs-f15">
                                            {{ $category->currency . ' ' . number_format($data->total_price, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- BARCODE / UPLOAD PAYMENT --}}
                @if ($data->payment_status == 'unpaid')
                    <div class="cs-note_right relative">
                        <table class="border-none">
                            <tr>
                                <td class="border-none py-0">Contact</td>
                                <td class="border-none py-0">:</td>
                                <td class="border-none py-0">info@paqs2025.com for details.</td>
                            </tr>
                            <tr>
                                <td class="border-none py-0">Payment method</td>
                                <td class="border-none py-0">:</td>
                                <td class="border-none py-0">Bank Transfer.</td>
                            </tr>
                            <tr>
                                <td class="border-none py-0">Bank Name</td>
                                <td class="border-none py-0">:</td>
                                <td class="border-none py-0">BCA Cab. Andalas Kota Makassar</td>
                            </tr>
                            <tr>
                                <td class="border-none py-0">Beneficiary</td>
                                <td class="border-none py-0">:</td>
                                <td class="border-none py-0">PT Debindo Mega Promo</td>
                            </tr>
                            <tr>
                                <td class="border-none py-0">Account Number</td>
                                <td class="border-none py-0">:</td>
                                <td class="border-none py-0">1589766766</td>
                            </tr>
                            <tr>
                                <td class="border-none py-0">SWIFT Code</td>
                                <td class="border-none py-0">:</td>
                                <td class="border-none py-0">CENAIDJA or CENAIDJAXXX</td>
                            </tr>
                            <tr>
                                <td class="border-none py-0"><strong>Important</strong></td>
                                <td class="border-none py-0">:</td>
                                <td class="border-none py-0">Please use your full name as the reference for your bank
                                    transfer.</td>
                            </tr>
                        </table>

                    </div>

                    <form action="{{ url('/order/upload_payment/' . $data->no_invoice) }}" method="POST"
                        enctype="multipart/form-data" class="text-center">
                        @csrf
                        <div class="input-group mt-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile"
                                    name="proof_of_payment" required>
                                <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose
                                    File...</label>
                            </div>
                        </div>
                        <div class="text-danger">*Max 2mb size of image</div>
                        <button class="font-semibold text-lg rounded-md bg-warna-01 text-white px-3 py-2 mt-6"
                            type="submit">Upload Payment Proof</button>

                    </form>
                    <div class="text-center">or</div>
                    <form action="{{ route('payment.initiate') }}" method="POST" class="text-center">
                        @csrf
                        <input type="hidden" required value="{{ $data->no_invoice }}" name="no_invoice">
                        <input type="hidden" required value="{{ $category->currency }}" name="currency">
                        <input type="hidden" required value="{{ $data->total_price }}" name="total_price">
                        <input type="hidden" required value="{{ $data->full_name }}" name="full_name">
                        <input type="hidden" required value="{{ $data->email }}" name="email">
                        <input type="hidden" required value="{{ $data->telephone }}" name="telephone">
                        <button class="font-semibold text-lg rounded-md bg-warna-01 text-white px-3 py-2"
                            type="submit">Pay with Credit
                            Card</button>
                    </form>
                @else
                    @if ($data->is_confirmed == true)
                        <div class="w-full flex flex-row flex-wrap justify-center">
                            <?php $i = 1; ?>
                            @foreach ($tickets as $ticket)
                                <div class="p-2 w-full md:w-1/2 h-auto">
                                    <div
                                        class="mx-auto mb-4 text-center text-black flex-col flex items-center border rounded-xl p-4 text-xl h-full">
                                        <?php echo DNS2D::getBarcodeSVG($ticket->barcode, 'QRCODE', 6, 6); ?>
                                        <span class="mt-2">Ticket {{ $i }}</span>
                                        <span class="font-semibold">#{{ $ticket->barcode }}</span>
                                        <p class="">{{ $ticket->name }}</p>
                                        <p class="break-all">{{ $ticket->email }}</p>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            @endforeach
                        </div>
                        <div class="text-center mb-4">
                            <button action="manage_ticket" data-toggle="modal" data-target="#exampleModal"
                                type="button"
                                class="font-semibold text-lg rounded-md bg-slate-100 text-warna-01 px-4 py-3 hover:text-white hover:bg-warna-01 mt-6">Manage
                                Your Tickets</button>
                            <a href="{{ url('/invoice/' . $data->no_invoice . '/pdf') }}"
                                class="font-semibold text-lg rounded-md bg-slate-100 text-warna-01 px-4 py-3 hover:text-white hover:bg-warna-01 mt-6">Download
                                Receipt</a>

                            <!-- Modal -->
                            <div class="modal fade text-black" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <form action="{{ url('/manage_ticket') }}" method="post" class="modal-content">
                                        @csrf
                                        <input type="hidden" name="no_invoice" value="{{ $data->no_invoice }}">
                                        <div class="modal-header">
                                            <span class="font-semibold text-xl" id="exampleModalLabel">Manage
                                                Tickets</span>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="text-xl">
                                                @foreach ($tickets as $tic)
                                                    <tr>
                                                        <input type="hidden" name="id[]"
                                                            value="{{ $tic->id }}">
                                                        <td class="border-none text-lg p-0 text-left">
                                                            #{{ $tic->barcode }}</td>
                                                        <td class="border-none text-lg relative">
                                                            <label
                                                                class="absolute text-sm top-0 left-8bg-white rounded-md">Name</label>
                                                            <input type="text" name="name[]"
                                                                class="w-full rounded-md bg-slate-100 border-none text-lg p-3 focus:outline-none focus:ring-0"
                                                                value="{{ $tic->name }}">
                                                        </td>
                                                        <td class="border-none text-lg relative">
                                                            <label
                                                                class="absolute text-sm top-0 left-8bg-white rounded-md">Email</label>
                                                            <input type="email" name="email[]"
                                                                class="w-full rounded-md bg-slate-100 border-none text-lg p-3 focus:outline-none focus:ring-0"
                                                                value="{{ $tic->email }}">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            <p class="text-left text-slate-500 mt-8">Barcodes will be sent to users'
                                                emails.
                                                Please double-check the email
                                                addresses carefully</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit"
                                                class="font-semibold text-lg rounded-md bg-slate-100 text-warna-01 px-4 py-3 hover:text-white hover:bg-warna-01">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <p class="text-black text-center">
                            Bring the ticket to entry the PAQS Congress 2025.
                        </p>
                    @else
                        <p class="text-black text-center">
                            Please wait for confirmation.
                        </p>
                    @endif


                @endif
                @if ($data->is_confirmed == false)
                    <div class="text-center mt-4">
                        <a href="{{ url('/invoice/' . $data->no_invoice . '/pdf') }}"
                            class="font-semibold text-lg rounded-md bg-slate-100 text-warna-01 px-3 py-2 mt-6 hover:text-white hover:bg-warna-01">Download
                            Invoice</a>
                    </div>
                @endif



                {{-- Contact --}}
                <p class="text-center mt-5 text-gray-500">
                    Contact info@paqs2025.com for details.
                </p>

                @if (session()->has('order_exist'))
                    <script>
                        Swal.fire({
                            title: "You Already Have an Invoice!",
                            text: "Your invoice has been created. Please verify its status. If you encounter any issues, reach out through the contact details provided below.",
                            icon: "warning",
                            confirmButtonColor: "#0c6196",
                        });
                    </script>
                @endif
            </div>
        </div>
    </div>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <script>
            Swal.fire({
                title: 'Upload Failed!',
                text: 'The file must be in .png or .jpg format, with a maximum size of 2MB.',
                icon: 'error',
                confirmButtonText: 'Close',
                confirmButtonColor: '#032337',
            })
        </script>
    @endif
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
