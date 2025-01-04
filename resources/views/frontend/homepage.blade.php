@include('frontend.components.header')
@include('frontend.components.navbar')

<main>


    <section id="parallax"
        class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix"
        style="background-image:url({{ url('img/forum.jpg') }})">
        <div class="slider-shape ss-one layer" data-depth="0.10"><img src="img/shape/slider_shape01.png" alt="shape">
        </div>
        <div class="slider-shape ss-two layer" data-depth="0.30"><img src="img/shape/slider_shape02.png" alt="shape">
        </div>
        <div class="slider-shape ss-three layer" data-depth="0.40"><img src="img/shape/slider_shape03.png"
                alt="shape"></div>
        <div class="slider-shape ss-four layer" data-depth="0.60"><img src="img/shape/slider_shape04.png"
                alt="shape"></div>
        <div class="slider-shape ss-five layer" data-depth="0.20"><img src="img/shape/slider_shape05.png"
                alt="shape"></div>
        <div class="slider-shape ss-six layer" data-depth="0.15"><img src="img/shape/slider_shape06.png" alt="shape">
        </div>
        {{-- <div class="slider-shape ss-eight layer" data-depth="0.50"><img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}"
                alt="shape">
        </div> --}}
        <div class="slider-active">
            <div class="single-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="slider-content second-slider-content">
                                <ul data-animation="fadeInUp animated" data-delay=".2s">
                                    <li><i class="fas fa-map-marker-alt"></i> Jakarta - Indonesia</li>
                                    <li><i class="far fa-clock"></i> 22 - 26 August 2025, </li>
                                </ul>
                                <h2 data-animation="fadeInUp animated" data-delay=".4s" class="text-xl font-bold">PAQS
                                    CONGRESS
                                    <span class="text-sky-500">2025</span>
                                </h2>
                                <div countdown class="conterdown wow fadeInDown animated"
                                    data-animation="fadeInDown animated" data-delay=".2s"
                                    data-date="Aug 22 2025 00:00:00">
                                    <div class="timer">
                                        <div class="timer-outer bdr1">
                                            <span class="days" data-days>0</span>
                                            <div class="smalltext">Days</div>
                                            <div class="value-bar"></div>
                                        </div>
                                        <div class="timer-outer bdr2">
                                            <span class="hours" data-hours>0</span>
                                            <div class="smalltext">Hours</div>
                                        </div>
                                        <div class="timer-outer bdr3">
                                            <span class="minutes" data-minutes>0</span>
                                            <div class="smalltext">Minutes</div>
                                        </div>
                                        <div class="timer-outer bdr4">
                                            <span class="seconds" data-seconds>0</span>
                                            <div class="smalltext">Seconds</div>
                                        </div>
                                        <p id="time-up"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="about" class="about-area about-p pt-120 pb-120">
        <div class="container">
            <div class="">
                <div class="about-content s-about-content pl-30">
                    <div class="about-title second-atitle">
                        <div class="text-outline wow fadeInUp animated" data-animation="fadeInUp animated"
                            data-delay=".2s">
                            <span>WHY ?</span>
                        </div>
                        <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".3s">Join
                            Us</span>
                        <h2 class="wow fadeInUp animated font-bold" data-animation="fadeInUp animated" data-delay=".4s">
                            WHY
                            become a PAQS Member
                        </h2>
                    </div>
                    <div class="wow fadeInDown animated" data-animation="fadeInUp animated" data-delay=".2s">
                        <p>Providing a platform for sharing knowledge and best practise among Quantity Surveying
                            professionals in particular, and construction practitioners, consultants, developers,
                            and academics in general.
                        </p>
                        <p>Improving education and training in the field of Quantity Surveying</p>
                        <p>Promoting best practices and compliance with international standards, ensuring quality
                            services.</p>
                        <p>Being part of PAQS means having access to a wide professional network across the Asia-Pacific
                            region, which fosters collaboration and the exchange of various knowledge</p>
                        <p>Improving professionalism and standards in the Quantity Surveying profession in the Asia and
                            Western Pacific region</p>
                        <p>By becoming a member of PAQS, you ensure that you are working with highly skilled and
                            knowledgeable professionals who adhere to international standards and ethical practices.
                            PAQS members benefit from continuous professional development and a strong network,
                            enhancing their ability to provide high-quality services.</p>
                        <p>Encouraging innovation and sustainability in the construction industry through international
                            collaboration.</p>
                        <a href="#" class="btn mt-20"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="rounded-xl border-dashed border-2 border-warna-01 p-4">
                        <p class="text-2xl font-bold text-black">PAQS Congress 2024: ‘Digitalisation Towards a Smart
                            Nation’</p>
                        <p class="mb-4">Learn what this congress offers attendees and how it can benefit your
                            professional development.</p>
                        <a href="{{ url('/about') }} " class="group py-2">
                            Learn More
                            <x-heroicon-o-arrow-long-right
                                class="w-6 h-6 inline group-hover:translate-x-2 transition duration-300" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rounded-xl border-dashed border-2 border-warna-01 p-4">
                        <p class="text-2xl font-bold text-black">Dive Deeper: Explore the PAQS Congress 2024 Programme
                        </p>
                        <p class="mb-4">Get a glimpse of the exciting sessions, presentations, and events planned for
                            PAQS Congress 2024! Explore the full program. </p>
                        <a href="{{ url('/programme') }} " class="group py-2">
                            View Full Programme
                            <x-heroicon-o-arrow-long-right
                                class="w-6 h-6 inline group-hover:translate-x-2 transition duration-300" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rounded-xl border-dashed border-2 border-warna-01 p-4">
                        <p class="text-2xl font-bold text-black">Win a Travel Scholarship! Enter the PAQS-Iwata
                            Foundation Competition</p>
                        <p class="mb-4">Apply for the PAQS-Iwata Foundation scholarship to attend PAQS 2024 and gain
                            valuable international exposure</p>
                        <a href="{{ url('/competition') }} " class="group py-2">
                            Learn More & Apply
                            <x-heroicon-o-arrow-long-right
                                class="w-6 h-6 inline group-hover:translate-x-2 transition duration-300" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="rounded-xl border-dashed border-2 border-warna-01 p-4">
                        <p class="text-2xl font-bold text-black">Share Your Research:
                            Submit Your Abstract for PAQS
                            2024</p>
                        <p class="mb-4">We invite submissions for the PAQS 2024 abstract competition. Showcase your
                            research and gain recognition among a global audience. Learn more about the competition
                            guidelines and submit your abstract today</p>
                        <a href="{{ url('/abstract') }}" class="group py-2">
                            Learn More & Submit
                            <x-heroicon-o-arrow-long-right
                                class="w-6 h-6 inline group-hover:translate-x-2 transition duration-300" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('frontend.components.footer')
