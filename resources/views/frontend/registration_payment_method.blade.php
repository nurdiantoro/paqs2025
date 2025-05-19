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

                        </div>
                    </div>
                </div>

                {{-- INVOICE BODY --}}
                <div class="tm-border-1px cs-mb30"></div>
                <div class="display-flex cs-mb30 flex-wrap justify-between gap-135">
                    <div class="cs-invoice_left items-center">
                        <b class="cs-primary_color cs-f16">
                            Payment Details:</b>
                        <p>
                            {{ $request->first_name . ' ' . $request->last_name }}, <br />
                            {{ $request->address }}, <br />
                            {{ $request->email }}
                        </p>
                    </div>
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
                                            {{ $request->quantity }}
                                        </td>
                                        <td class="cs-width_2 cs-text_right cs-primary_color cs-f15">
                                            @php
                                                $total_price = $category->price * $request->quantity;
                                            @endphp
                                            {{ number_format($total_price, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cs-width_5 cs-primary_color cs-f15">
                                            Total
                                        </td>
                                        <td class="cs-width_2"></td>
                                        <td class="cs-width_2"></td>
                                        <td class="cs-width_2 cs-text_right cs-semi_bold cs-primary_color cs-f15">
                                            {{ $category->currency . ' ' . number_format($total_price, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- BARCODE / UPLOAD PAYMENT --}}
                <div class="cs-note_right relative">
                    <p class="cs-primary_color cs-f16 mb-2 font-bold">
                        Choose Payment Method:</p>
                    <form action="{{ route('payment.initiate') }}" method="POST">
                        @csrf
                        <div class="flex flex-row gap-2 mb-8">
                            <div class="flex flex-row gap-2 items-center group">
                                <input type="radio" name="payment" id="payment" value="manual"
                                    class="peer mr-2 hidden" required>
                                <label for="payment"
                                    class="text-warna-02 text-[16px] font-semibold opacity-50 py-2 px-4 bg-sky-50 border-[2px] border-sky-50 rounded peer-checked:opacity-100 peer-checked:bg-warna-01 peer-checked:text-white peer-checked:border-warna-01  group-hover:opacity-100">Upload
                                    Proof of Payment (Manual Confirmation)</label>
                            </div>

                            <div class="flex flex-row gap-2 items-center group">
                                <input type="radio" name="payment" id="payment2" value="credit_card"
                                    class="peer mr-2 hidden" required>
                                <label for="payment2"
                                    class="text-warna-02 text-[16px] font-semibold opacity-50 py-2 px-4 bg-sky-50 border-[2px] border-sky-50 rounded peer-checked:opacity-100 peer-checked:bg-warna-01 peer-checked:text-white peer-checked:border-warna-01  group-hover:opacity-100">Credit
                                    Card (Auto Confirmation)</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn">Check Out</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
