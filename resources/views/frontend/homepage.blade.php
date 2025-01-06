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
                            <table class="mb-8 text-justify">
                                <tr>
                                    <td><x-lucide-network class="w-8 h-8 mr-2" /></td>
                                    <td class="text-lg">Providing a platform for sharing knowledge and best practice
                                        among Quantity
                                        Surveying professionals in particular, and construction practitioners,
                                        consultants, developers, and academics in general</td>
                                </tr>
                                <tr>
                                    <td><x-uni-graduation-cap-o class="w-8 h-8 mr-2" /></td>
                                    <td class="text-lg">Improving education and training in the field of Quantity
                                        Surveying</td>
                                </tr>
                                <tr>
                                    <td><x-heroicon-o-trophy class="w-8 h-8 mr-2" /></td>
                                    <td class="text-lg">Promoting best practices and compliance with international
                                        standards, ensuring
                                        quality services</td>
                                </tr>
                                <tr>
                                    <td><x-akar-people-group class="w-8 h-8 mr-2" /></td>
                                    <td class="text-lg">Being part of PAQS means having access to a wide professional
                                        network across the
                                        Asia-Pacific region, which fosters collaboration and the exchange of various
                                        knowledge</td>
                                </tr>
                                <tr>
                                    <td><x-lucide-file-badge-2 class="w-8 h-8 mr-2" /></td>
                                    <td class="text-lg">Improving professionalism and standards in the Quantity
                                        Surveying profession in
                                        the Asia and Western Pacific region</td>
                                </tr>
                            </table>
                            <a href="{{ url('/registration') }}" class="btn mx-auto"></i> Register Now</a>
                        </div>
                        <div class="wow fadeInDown animated lg:basis-1/2" data-animation="fadeInUp animated"
                            data-delay=".2s">
                            <div
                                class="rounded-xl bg-white shadow-lg p-4 lg:w-1/2 mx-auto relative before:contents[''] before:absolute before:w-full before:h-full before:top-20 before:left-10 before:z-[-1] before:bg-sky-100 before:rounded-xl">
                                <p class="m-0 text-justify"><x-bxs-quote-right class="w-8 h-8" />By becoming a member of
                                    PAQS, you
                                    ensure that you are
                                    working with
                                    highly skilled
                                    and knowledgeable professionals who adhere to international standards and ethical
                                    practices.
                                    PAQS members benefit from continuous professional development and a strong network,
                                    enhancing their ability to provide high-quality services. Encouraging innovation and
                                    sustainability in the construction industry through international collaboration.</p>
                                <div class="flex flex-row -space-x-2 absolute -right-6 -bottom-16 ">
                                    <img src="{{ asset('img/avatar1.png') }}"
                                        class="w-12 h-12 rounded-full border border-sky-100 z-50">
                                    <img src="{{ asset('img/avatar2.png') }}"
                                        class="w-12 h-12 rounded-full border border-sky-100 z-40">
                                    <img src="{{ asset('img/avatar3.png') }}"
                                        class="w-12 h-12 rounded-full border border-sky-100 z-30">
                                    <img src="{{ asset('img/avatar4.png') }}"
                                        class="w-12 h-12 rounded-full border border-sky-100 z-20">
                                    <img src="{{ asset('img/avatar5.png') }}"
                                        class="w-12 h-12 rounded-full border border-sky-100 z-10">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="py-40 mb-40 md:px-80 flex lg:flex-col flex-row gap-24">
        <div class="">
            <p class="text-4xl font-bold text-warna-temp-02 mb-2 text-center wow fadeInLeft animated">2025 Congress
                Theme
            </p>
            <p
                class="text-center capitalize mb-12 text-black font-semibold text-xl lg:w-1/2 lg:mx-auto wow fadeInLeft animated">
                Harnessing Ai
                And Digital
                Technology For Smart Construction Towards
                Net Zero, Decarbonizing And Innovative Building Materials </p>
            <div class="flex text-center gap-8 wow fadeInLeft animated">
                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-sky-400 before:rounded-2xl">
                    <div class="flex flex-col flex-1 p-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">AI-Driven Construction Innovations</span>
                        <span class="mt-2">Leveraging artificial intelligence for predictive analytics,
                            automation, and enhanced decision-making</span>
                    </div>
                </div>
                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-green-400 before:rounded-2xl">
                    <div class="flex flex-col flex-1 p-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">Pathways to Net Zero and Decarbonization</span>
                        <span class="mt-2">Cutting-edge approaches to reducing carbon footprints in
                            construction processes</span>
                    </div>
                </div>
                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-yellow-400 before:rounded-2xl">
                    <div class="flex flex-col flex-1 p-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">Breakthroughs in Sustainable Materials</span>
                        <span class="mt-2">Next-generation materials that drive both innovation and
                            environmental responsibility. Modular and Prefabricated</span>
                    </div>
                </div>
                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-red-500 before:rounded-2xl">
                    <div class="flex flex-col flex-1 p-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">Construction</span>
                        <span class="mt-2">Revolutionizing building techniques for speed, efficiency, and
                            sustainability</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="wow fadeInRight animated">
            <img src="{{ asset('img/cloud-computing.png') }}" class="w-2xl h-auto">
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
            <div
                class="flex items-center bg-slate-800 p-8 rounded-[30px] relative before:bg-[url('{{ asset('img/blue-background.png') }}')] before:bg-cover before:block before:h-full before:w-full before:absolute before:rounded-[30px] before:z-0">
                <div class="flex-1 wow fadeInUp animated">
                    <img src="{{ asset('img/Register Now.png') }}" class="h-80 mx-auto scale-[1.75]">
                </div>
                <div class="flex-1 wow fadeInUp animated">
                    <div class="px-24">
                        <p class="text-4xl font-bold text-gray-300"><span class="text-white">Register</span> and
                            Secure
                            Your Spot at PAQS
                            2025!</p>
                        <p class="mb-4 text-xl text-sky-600">Don’t miss out on the opportunity to:</p>
                        <table class="border-none mb-4" border="0">
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">Learn
                                    from industry leaders and experts. </td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">Network
                                    with a global community of professionals.</td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">Gain
                                    valuable insights and advance your career. </td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">
                                    <strong>Register Now:</strong> Secure your spot at PAQS Congress 2025 and unlock a
                                    world of possibilities!
                                </td>
                            </tr>
                        </table>
                        <a href="{{ url('/registration') }}" class="btn mx-auto"></i> Register Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@include('frontend.components.footer')
