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


    {{-- WHY become a PAQS Member --}}
    <section id="about" class="about-area about-p md:pt-60 mb-80 md:px-80">
        <div class="container">
            <div class="">
                <div class="about-content s-about-content">
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
                    <div class="flex">
                        <div class="wow fadeInDown animated lg:basis-1/2" data-animation="fadeInUp animated"
                            data-delay=".2s">
                            <p class="text-lg">1. Providing a platform for sharing knowledge and best practice among
                                Quantity Surveying professionals in particular, and construction practitioners,
                                consultants,
                                developers, and academics in general.
                                <br><br>2. Improving education and training in the field of Quantity Surveying
                                <br><br>3. Promoting best practices and compliance with international standards,
                                ensuring
                                quality services.
                                <br><br>4. Being part of PAQS means having access to a wide professional network across
                                the
                                Asia-Pacific region, which fosters collaboration and the exchange of various knowledge
                                <br><br>5. Improving professionalism and standards in the Quantity Surveying profession
                                in
                                the Asia and Western Pacific region
                                <br><br>
                            </p>
                        </div>
                        <div class="wow fadeInDown animated lg:basis-1/2" data-animation="fadeInUp animated"
                            data-delay=".2s">
                            <p>By becoming a member of PAQS, you ensure that you are working with highly skilled
                                and knowledgeable professionals who adhere to international standards and ethical
                                practices.
                                PAQS members benefit from continuous professional development and a strong network,
                                enhancing their ability to provide high-quality services. Encouraging innovation and
                                sustainability in the construction industry through international collaboration.</p>
                        </div>
                    </div>
                    <a href="{{ url('/registration') }}" class="btn mt-20"></i> Register Now</a>
                </div>
            </div>
        </div>
    </section>


    <section class="py-40 mb-40 md:px-80 flex">
        <div class="lg:w-1/2">
            <p class="text-xl font-bold text-warna-temp-02 mb-2 text-center">2025 Congress Theme </p>
            <p class="text-center">HARNESSING AI AND DIGITAL TECHNOLOGY FOR SMART CONSTRUCTION TOWARDS NET ZERO,
                DECARBONIZING AND
                INNOVATIVE
                BUILDING MATERIALS </p>
            <div class="flex flex-wrap text-center">
                <div class="flex flex-col lg:basis-1/2 p-4">
                    <span class="font-bold text-blue-950">AI-Driven Construction Innovations</span>
                    <span>Leveraging artificial intelligence for predictive analytics,
                        automation, and enhanced decision-making</span>
                </div>
                <div class="flex flex-col lg:basis-1/2 p-4">
                    <span class="font-bold text-blue-950">Pathways to Net Zero and Decarbonization</span>
                    <span>Cutting-edge approaches to reducing carbon footprints in
                        construction processes</span>
                </div>
                <div class="flex flex-col lg:basis-1/2 p-4">
                    <span class="font-bold text-blue-950">Breakthroughs in Sustainable Materials</span>
                    <span>Next-generation materials that drive both innovation and
                        environmental responsibility. Modular and Prefabricated</span>
                </div>
                <div class="flex flex-col lg:basis-1/2 p-4">
                    <span class="font-bold text-blue-950">Construction</span>
                    <span>Revolutionizing building techniques for speed, efficiency, and sustainability</span>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 items-center">
            <img src="{{ asset('img/mic.png') }}" class="w-80 mx-auto">
        </div>
    </section>


    {{-- <section class="counter-area py-40 mb-40 md:px-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="rounded-xl border-dashed border-2 border-warna-01 p-4">
                        <p class="text-2xl font-bold text-black">PAQS Congress 2025: ‘Digitalisation Towards a Smart
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
                        <p class="text-2xl font-bold text-black">Dive Deeper: Explore the PAQS Congress 2025 Programme
                        </p>
                        <p class="mb-4">Get a glimpse of the exciting sessions, presentations, and events planned for
                            PAQS Congress 2025! Explore the full program. </p>
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
                        <p class="mb-4">Apply for the PAQS-Iwata Foundation scholarship to attend PAQS 2025 and gain
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
                            2025</p>
                        <p class="mb-4">We invite submissions for the PAQS 2025 abstract competition. Showcase your
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
    </section> --}}

    <section class="py-40 mb-40 md:px-80">
        <div class="container">
            <div class="row items-center">
                <div class="col-md-6">
                    <img src="{{ asset('img/form.png') }}" class="h-80 mx-auto">
                </div>
                <div class="col-md-6">
                    <div class="">
                        <p class="text-4xl font-bold text-warna-temp-02">Register Now and Secure Your Spot at PAQS
                            2025!</p>
                        <p class="mb-4">Don’t miss out on the opportunity to:</p>
                        <table class="border-none" border="0">
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-green-700 bg-green-100 p-1 rounded-full" /></td>
                                <td class="border-none align-top pl-2 pb-4 pt-0 pr-0 text-blue-900 text-xl">1. Learn
                                    from industry leaders and experts. </td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-green-700 bg-green-100 p-1 rounded-full" /></td>
                                <td class="border-none align-top pl-2 pb-4 pt-0 pr-0 text-blue-900 text-xl">2. Network
                                    with a global community of professionals.</td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-green-700 bg-green-100 p-1 rounded-full" /></td>
                                <td class="border-none align-top pl-2 pb-4 pt-0 pr-0 text-blue-900 text-xl">3. Gain
                                    valuable insights and advance your career. </td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-green-700 bg-green-100 p-1 rounded-full" /></td>
                                <td class="border-none align-top pl-2 pb-4 pt-0 pr-0 text-blue-900 text-xl">
                                    <strong>Register Now:</strong> Secure your spot at PAQS Congress 2025 and unlock a
                                    world of possibilities!
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@include('frontend.components.footer')
