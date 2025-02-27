@include('frontend.components.header')
@include('frontend.components.navbar')


<!-- main-area -->
<main>
    <div class="cs-container tm-consulting mt-140 min-h-screen">
        <div class="cs-invoice cs-style1">

            <div class="cs-invoice_in " id="download_section">

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
                                    <p>Status: {{ $data->payment_status }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div
                        class="font-bold text-6xl text-warna-01 opacity-50 flex justify-center items-center rounded-xl">
                        Paid
                    </div>
                </div>
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
                                            {{ number_format($total_category, 0, ',', '.') }}
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
                                            {{ $category->currency . ' ' . number_format($total_price, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if ($data->payment_status == 'paid')
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
                @else
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
                        enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mt-8">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile"
                                    name="proof_of_payment" required>
                                <label class="custom-file-label" for="validatedInputGroupCustomFile">Upload
                                    Payment...</label>
                            </div>
                            <div class="input-group-append">
                                <button class="px-3 border border-gray-400 rounded-r-md bg-warna-01 text-white"
                                    type="submit">Send</button>
                            </div>
                        </div>
                        <span class="text-danger">*Max 2mb size of image</span>
                    </form>

                    <!-- .cs-note -->
                    <div class="cs-invoice_btns cs-hide_print w-full">
                        <a href="javascript:window.print()" class="cs-invoice_btn tm-bg-gray tm-border ">
                            <svg class="cs-primary_color" xmlns="http://www.w3.org/2000/svg"
                                class="ionicon cs_primary_color" viewBox="0 0 512 512">
                                <path
                                    d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                    stroke-width="32" />
                                <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32"
                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                    stroke-width="32" />
                                <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24"
                                    fill="none" stroke="currentColor" stroke-linejoin="round"
                                    stroke-width="32" />
                                <circle cx="392" cy="184" r="24" />
                            </svg>
                            <span class="cs-primary_color">Print</span>
                        </a>
                        <button id="download_btn" class="cs-invoice_btn bg-warna-01 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                <title>Download</title>
                                <path
                                    d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288" />
                            </svg>
                            <span>Download PDF</span>
                        </button>
                    </div>

                    <p class="text-center mt-5 text-gray-500">
                        Contact info@paqs2025.com for details.
                    </p>
                @endif

            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
