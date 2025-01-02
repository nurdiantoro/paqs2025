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
                        </div>
                    </div>
                </div>
                <div class="tm-border-1px cs-mb30"></div>
                <div class="display-flex cs-mb30 flex-wrap gap-135">
                    <div class="cs-invoice_left">
                        <b class="cs-primary_color cs-f16">Invoice Check:</b>
                    </div>
                </div>

                <form action="{{ url('/order/check') }}" method="POST">
                    @csrf
                    <div class="input-group mt-8">
                        <input type="text" class="form-control w-full border rounded-l-md border-gray-400 p-2"
                            placeholder="Invoice number" name="no_invoice">
                        <div class="input-group-append">
                            <button class="px-3 border border-gray-400 rounded-r-md bg-warna-01 text-white"
                                type="submit">Check</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
