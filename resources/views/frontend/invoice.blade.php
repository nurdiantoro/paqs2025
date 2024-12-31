@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="cs-container tm-consulting mt-140 min-h-screen">
        <div class="cs-invoice cs-style1">
            <div class="cs-invoice_in" id="download_section">
                <div class="cs-type1 cs-mb25 flex-horizontal-center space-between">
                    <div class="cs-invoice_left">
                        <div class="cs-logo cs-mb5 tm-align-item-center flex-wrap">
                            <img class="cs-mr20 max-width120" src="{{ asset('img/LOGO PAQS CONGRESS.png') }}"
                                alt="Logo">
                            <div class="tm-right-logo">
                                <p class="cs-invoice_number cs-primary_color cs-mb3 cs-f18">Invoice No:
                                    <Span class="cs-semi_bold">#{{ $data->no_invoice }}</Span>
                                </p>
                                <div class="display-flex">
                                    <svg class=" cs-mr5" width="19" height="19" viewBox="0 0 19 19"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2456 3.8999H14.4956V2.3999C14.4956 2.20099 14.4166 2.01022 14.2759 1.86957C14.1353 1.72892 13.9445 1.6499 13.7456 1.6499C13.5467 1.6499 13.3559 1.72892 13.2153 1.86957C13.0746 2.01022 12.9956 2.20099 12.9956 2.3999V3.8999H6.99561V2.3999C6.99561 2.20099 6.91659 2.01022 6.77594 1.86957C6.63528 1.72892 6.44452 1.6499 6.24561 1.6499C6.04669 1.6499 5.85593 1.72892 5.71528 1.86957C5.57462 2.01022 5.49561 2.20099 5.49561 2.3999V3.8999H4.74561C4.14887 3.8999 3.57657 4.13696 3.15462 4.55891C2.73266 4.98087 2.49561 5.55317 2.49561 6.1499V6.8999H17.4956V6.1499C17.4956 5.55317 17.2586 4.98087 16.8366 4.55891C16.4146 4.13696 15.8423 3.8999 15.2456 3.8999Z"
                                            fill="#353535" />
                                        <path
                                            d="M2.49561 14.3999C2.49561 14.9966 2.73266 15.5689 3.15462 15.9909C3.57657 16.4129 4.14887 16.6499 4.74561 16.6499H15.2456C15.8423 16.6499 16.4146 16.4129 16.8366 15.9909C17.2586 15.5689 17.4956 14.9966 17.4956 14.3999V8.3999H2.49561V14.3999Z"
                                            fill="#353535" />
                                    </svg>
                                    <p class="cs-mb0 cs-f14">
                                        Date: {{ date_format($data->created_at, 'd F Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tm-border-1px cs-mb30"></div>
                <div class="display-flex cs-mb30 flex-wrap gap-135">
                    <div class="cs-invoice_left">
                        <b class="cs-primary_color cs-f16">Invoice To:</b>
                        <p>
                            {{ $data->full_name }}, <br />
                            {{ $data->address }}, <br />
                            {{ $data->email }}
                        </p>
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
                                            {{ $category->price }}
                                        </td>
                                        <td class="cs-width_2 cs-primary_color cs-f15">
                                            {{ $data->quantity }}
                                        </td>
                                        <td class="cs-width_2 cs-text_right cs-primary_color cs-f15">
                                            {{ number_format($total_category, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                    @if ($addon != null)
                                        <tr>
                                            <td class="cs-width_5 cs-primary_color cs-f15">
                                                {{ $addon->name }}
                                            </td>
                                            <td class="cs-width_2 cs-primary_color cs-f15">
                                                {{ $addon->price }}
                                            </td>
                                            <td class="cs-width_2 cs-primary_color cs-f15">
                                                {{ $data->quantity }}
                                            </td>
                                            <td class="cs-width_2 cs-text_right cs-primary_color cs-f15">
                                                {{ number_format($total_addon, 2, ',', '.') }}
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
                                            BND {{ number_format($total_price, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cs-note_right">
                    <table class="border-none">
                        <tr>
                            <td class="border-none py-0">Pricing</td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">All prices listed are in BND.</td>
                        </tr>
                        <tr>
                            <td class="border-none py-0">Group rates</td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">Contact registration@paqs2024.com (cc:
                                paqs2024@gmail.com)
                                for details.</td>
                        </tr>
                        <tr>
                            <td class="border-none py-0">Payment method</td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">Bank Transfer.</td>
                        </tr>
                        <tr>
                            <td class="border-none py-0">Bank Name</td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">Bank Islam Brunei Darussalam.</td>
                        </tr>
                        <tr>
                            <td class="border-none py-0">Beneficiary</td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">Pertubuhan Ukur Jurutera dan Arkitek Brunei (PUJA
                                BRUNEI)</td>
                        </tr>
                        <tr>
                            <td class="border-none py-0">Account Number</td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">00-001-01-0048987</td>
                        </tr>
                        <tr>
                            <td class="border-none py-0">SWIFT Code</td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">BIBDBNBB</td>
                        </tr>
                        <tr>
                            <td class="border-none py-0"><strong>Important</strong></td>
                            <td class="border-none py-0">:</td>
                            <td class="border-none py-0">Please use your full name as the reference for your bank
                                transfer.</td>
                        </tr>
                    </table>
                </div>

                <form action="{{ url('/order_store/' . $data->id) }}" method="POST" enctype="multipart/form-data">
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
                </form>

                <!-- .cs-note -->
                <div class="cs-invoice_btns cs-hide_print w-full">
                    <a href="javascript:window.print()" class="cs-invoice_btn tm-bg-gray tm-border ">
                        <svg class="cs-primary_color" xmlns="http://www.w3.org/2000/svg"
                            class="ionicon cs_primary_color" viewBox="0 0 512 512">
                            <path
                                d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none"
                                stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                            <circle cx="392" cy="184" r="24" />
                        </svg>
                        <span class="cs-primary_color">Print</span>
                    </a>
                    <button id="download_btn" class="cs-invoice_btn bg-warna-01 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <title>Download</title>
                            <path
                                d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288" />
                        </svg>
                        <span>Download PDF</span>
                    </button>
                </div>

                <p class="text-center mt-5 text-gray-500">
                    Contact registration@paqs2024.com (cc: paqs2024@gmail.com) for details.
                </p>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
