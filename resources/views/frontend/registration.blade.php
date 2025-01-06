@include('frontend.components.header')
@include('frontend.components.navbar')
<main>
    <section id="pricing" class=" pt-113 pb-90 fix" style="">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mt-40 mb-20">
                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
                        Registration Plans
                    </span>
                    <h2 class="wow fadeInUp animated !text-bold" data-animation="fadeInUp animated" data-delay=".4s">
                        PAQS Congress 2025
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb-40">
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="pricing-box text-center mb-30 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="text-white text-lg bg-yellow-600 rounded-t-md px-4 py-2 inline-block tag">Early Bid
                        </div>
                        <div class="pricing-head bg-white rounded-t-xl">
                            <h4>PUJA Member with Gala Dinner</h4>
                            <div class="price-count mb-30">
                                <h2><small>BND <span class="line-through">500</span></small>400</h2>
                            </div>
                        </div>
                        <div class="pricing-body bg-white rounded-b-xl w-full">
                            <ul class="w-full text-left">
                                <li style="list-style-type: disc;">Early Bird Rate (ends on 7 July 2025)</li>
                                <li style="list-style-type: disc;">Pricing: All prices listed are in BND.</li>
                                <li style="list-style-type: disc;">Group rates: Contact registration@paqs2025.com (cc:
                                    paqs2025@gmail.com) for details.
                                </li>
                            </ul>
                            <div class="pricing-btn mt-10">
                                <a href="{{ url('registration_form') }}" class="btn"><i
                                        class="fas fa-sign-in-alt"></i>Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="pricing-box text-center mb-30 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="text-white text-lg bg-yellow-600 rounded-t-md px-4 py-2 inline-block tag">Early Bid
                        </div>
                        <div class="pricing-head bg-white rounded-t-xl">
                            <h4>Non-PUJA Member with Gala Dinner</h4>
                            <div class="price-count mb-30">
                                <h2><small>BND <span class="line-through">600</span></small>500</h2>
                            </div>
                        </div>
                        <div class="pricing-body bg-white rounded-b-xl w-full">
                            <ul class="w-full text-left">
                                <li style="list-style-type: disc;">Early Bird Rate (ends on 7 July 2025)</li>
                                <li style="list-style-type: disc;">Pricing: All prices listed are in BND.</li>
                                <li style="list-style-type: disc;">Group rates: Contact registration@paqs2025.com (cc:
                                    paqs2025@gmail.com) for details.
                                </li>
                            </ul>
                            <div class="pricing-btn mt-10">
                                <a href="{{ url('registration_form') }}" class="btn"><i
                                        class="fas fa-sign-in-alt"></i>Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="pricing-box text-center mb-30 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s">
                        {{-- <div class="text-white text-lg bg-yellow-600 rounded-t-md px-4 py-2 inline-block tag">Early Bid
                        </div> --}}
                        <div class="pricing-head bg-white rounded-t-xl">
                            <h4>Student (Conference Only)</h4>
                            <div class="price-count mb-30">
                                <h2><small>BND</small>100</h2>
                            </div>
                        </div>
                        <div class="pricing-body bg-white rounded-b-xl w-full">
                            <ul class="w-full text-left">
                                <li style="list-style-type: disc;">Ends on 17 Aug 2025</li>
                                <li style="list-style-type: disc;">Pricing: All prices listed are in BND.</li>
                                <li style="list-style-type: disc;">Group rates: Contact registration@paqs2025.com (cc:
                                    paqs2025@gmail.com) for details.
                                </li>
                            </ul>
                            <div class="pricing-btn mt-10">
                                <a href="{{ url('registration_form') }}" class="btn"><i
                                        class="fas fa-sign-in-alt"></i>Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="pricing-box text-center mb-30 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s">
                        {{-- <div class="text-white text-lg bg-yellow-600 rounded-t-md px-4 py-2 inline-block tag">Early Bid
                        </div> --}}
                        <div class="pricing-head bg-white rounded-t-xl">
                            <h4>PAQS Golf 2025</h4>
                            <div class="price-count mb-30">
                                <h2><small>BND</small>250</h2>
                            </div>
                        </div>
                        <div class="pricing-body bg-white rounded-b-xl w-full">
                            <ul class="w-full text-left">
                                <li style="list-style-type: disc;">Ends on 17 Aug 2025</li>
                                <li style="list-style-type: disc;">Pricing: All prices listed are in BND.</li>
                                <li style="list-style-type: disc;">Group rates: Contact registration@paqs2025.com (cc:
                                    paqs2025@gmail.com) for details.
                                </li>
                            </ul>
                            <div class="pricing-btn mt-10">
                                <a href="{{ url('registration_form') }}" class="btn"><i
                                        class="fas fa-sign-in-alt"></i>Registration</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('frontend.components.footer')
