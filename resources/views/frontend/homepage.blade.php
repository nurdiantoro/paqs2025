@include('frontend.components.header')
@include('frontend.components.navbar')

<main>


    <section id="parallax"
        class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix min-h-screen relative z-0"
        style="background-image:url({{ url('img/PAQS-Opening-1.jpg') }})">

        <div class="relative z-50 w-full min-h-screen flex flex-col items-center justify-center p-4">
            <div class="slider-content second-slider-content drop-shadow-[2px_4px_2px_rgba(0,0,0,1)]">
                <h2 data-animation="fadeInUp animated" data-delay=".4s"
                    class="text-[4.5rem] md:text-[7rem] font-bold wow fadeInUp animated font-panton">PAQS
                    CONGRESS
                    <span class="text-sky-500">2025</span>
                </h2>
                <div countdown class="conterdown wow fadeInDown animated mb-4" data-animation="fadeInDown animated"
                    data-delay=".2s" data-date="Aug 22 2025 00:00:00">
                    <div class="flex flex-row gap-8 lg:gap-16 text-center text-white font-bold">
                        <div class="">
                            <span class="days text-4xl md:text-2xl lg:text-6xl" data-days>0</span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div class="">
                            <span class="hours text-4xl md:text-2xl lg:text-6xl" data-hours>0</span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div class="">
                            <span class="minutes text-4xl md:text-2xl lg:text-6xl" data-minutes>0</span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div class="">
                            <span class="seconds text-4xl md:text-2xl lg:text-6xl" data-seconds>0</span>
                            <div class="smalltext">Seconds</div>
                        </div>
                        <p id="time-up"></p>
                    </div>
                </div>
                <ul data-animation="fadeInUp animated" data-delay=".2s">
                    <li class="wow fadeInLeft animated"><i class="fas fa-map-marker-alt text-3xl"></i> Raffles Hotel
                        Jakarta - Indonesia</li>
                    <li class="wow fadeInRight animated"><i class="far fa-clock text-3xl"></i> 22 - 26 August 2025,
                    </li>
                </ul>
            </div>
        </div>

        <div class="slider-shape ss-one layer z-50 relative" data-depth="0.10"><img src="img/shape/slider_shape01.png"
                alt="shape">
        </div>
        <div class="slider-shape ss-two layer z-50 relative" data-depth="0.30"><img src="img/shape/slider_shape02.png"
                alt="shape">
        </div>
        <div class="slider-shape ss-three layer z-50 relative" data-depth="0.40"><img src="img/shape/slider_shape03.png"
                alt="shape"></div>
        <div class="slider-shape ss-four layer z-50 relative" data-depth="0.60"><img src="img/shape/slider_shape04.png"
                alt="shape"></div>
        <div class="slider-shape ss-five layer z-50 relative" data-depth="0.20"><img src="img/shape/slider_shape05.png"
                alt="shape"></div>
        <div class="slider-shape ss-six layer z-50 relative" data-depth="0.15"><img src="img/shape/slider_shape06.png"
                alt="shape">
        </div>
        <div class="absolute h-full w-full z-10 bg-black opacity-20"></div>
    </section>

    {{-- 2025 Congress Theme --}}
    <section class="mt-120 mb-120 max-w-[100rem] mx-auto flex flex-col lg:flex-row gap-24 items-center ">
        <div class="grow relative z-10">
            <p class="text-4xl font-bold text-warna-temp-02 mb-2 text-center wow fadeInLeft animated">2025 Congress
                Theme
            </p>
            <div id="theme"
                class="text-center capitalize mb-2 md:mb-12 text-black font-semibold text-xl lg:w-1/2 lg:mx-auto wow fadeInLeft animated">
            </div>
            <div class="flex flex-wrap flex-col md:flex-row text-center gap-1 md:gap-4">

                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-sky-400 before:rounded-2xl wow fadeInUp animated">
                    <div class="flex flex-col flex-1 p-2 py-4 md:px-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">AI-Driven Construction Innovations</span>
                        <span class="mt-2">Leveraging artificial intelligence for predictive analytics,
                            automation, and enhanced decision-making</span>
                    </div>
                </div>

                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-green-400 before:rounded-2xl wow fadeInUp animated">
                    <div class="flex flex-col flex-1 p-2 py-4 md:px-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">Pathways to Net Zero and Decarbonization</span>
                        <span class="mt-2">Cutting-edge approaches to reducing carbon footprints in
                            construction processes</span>
                    </div>
                </div>

                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-yellow-400 before:rounded-2xl wow fadeInUp animated">
                    <div class="flex flex-col flex-1 p-2 py-4 md:px-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">Breakthroughs in Sustainable Materials</span>
                        <span class="mt-2">Next-generation materials that drive both innovation and
                            environmental responsibility. Modular and Prefabricated</span>
                    </div>
                </div>

                <div
                    class="flex flex-col flex-1 p-2 relative before:contents[''] before:absolute before:w-full before:h-20 before:bottom-0 before:left-0 z-50 before:-z-50 before:bg-red-500 before:rounded-2xl wow fadeInUp animated">
                    <div class="flex flex-col flex-1 p-2 py-4 md:px-4 bg-white rounded-xl shadow-lg h-auto relative">
                        <span class="font-bold text-slate-800">Construction</span>
                        <span class="mt-2">Revolutionizing building techniques for speed, efficiency, and
                            sustainability</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="wow fadeInRight animated flex-none relative w-64 hidden lg:block">
            <img src="{{ asset('img/cloud-computing.png') }}" class="w-80 absolute top-0 right-20 scale-[2] -z-10">
        </div>
    </section>

    <section class="mt-120 mb-120 max-w-[100rem] mx-auto">
        <div class="flex  flex-wrap">

            {{-- Card --}}
            <a href="{{ url('about') }}" class="w-full md:w-1/2 p-4 group h-auto wow fadeInUp animated">
                <div class="p-4 bg-white rounded-xl shadow-lg h-full">
                    <span class="rounded-full p-3 bg-red-100 w-20 h-20 flex items-center justify-center mb-4">
                        <x-sui-globe class="w-10 h-10 text-red-500 inline" />
                    </span>
                    <div class="font-semibold text-lg mb-2 text-slate-800">
                        PAQS Congress 2025: ‘HARNESSING AI AND DIGITAL TECHNOLOGY FOR SMART CONSTRUCTION TOWARDS NET
                        ZERO,
                        DECARBONIZING AND INNOVATIVE BUILDING MATERIALS’
                    </div>
                    <div class="text-slate-500 mb-4">
                        Learn what this congress offers attendees and how it can benefit your professional development.
                    </div>
                    <div class="group-hover:text-warna-temp-02 font-semibold mt-auto">
                        Learn More
                        <x-heroicon-o-arrow-long-right
                            class="w-5 h-5 inline group-hover:translate-x-2 duration-300 transition-transform" />
                    </div>
                </div>
            </a>
            <a href="{{ url('programme') }}" class="w-full md:w-1/2 p-4 group h-auto wow fadeInUp animated">
                <div class="p-4 bg-white rounded-xl shadow-lg h-full">
                    <span class="rounded-full p-3 bg-amber-100 w-20 h-20 flex items-center justify-center mb-4">
                        <x-sui-document class="w-10 h-10 text-amber-500 inline" />
                    </span>
                    <div class="font-semibold text-lg mb-2 text-slate-800">
                        Get Deeper: Explore the PAQS Congress 2025 Program
                    </div>
                    <div class="text-slate-500 mb-4">
                        Get a glimpse of the exciting sessions, presentations, and events planned for PAQS Congress
                        2025! Explore the full program.
                    </div>
                    <div class="group-hover:text-warna-temp-02 font-semibold mt-auto">
                        Learn More
                        <x-heroicon-o-arrow-long-right
                            class="w-5 h-5 inline group-hover:translate-x-2 duration-300 transition-transform" />
                    </div>
                </div>
            </a>
            <a href="{{ url('call-for-paper') }}" class="w-full md:w-1/2 p-4 group h-auto wow fadeInUp animated">
                <div class="p-4 bg-white rounded-xl shadow-lg h-full">
                    <span class="rounded-full p-3 bg-lime-100 w-20 h-20 flex items-center justify-center mb-4">
                        <x-sui-write class="w-10 h-10 text-lime-500 inline" />
                    </span>
                    <div class="font-semibold text-lg mb-2 text-slate-800">
                        Call for Papers: Submit Your Papers for PAQS 2025
                    </div>
                    <div class="text-slate-500 mb-4">
                        We invite submissions for the PAQS 202 papers competition. Showcase your research and gain
                        recognition among a global audience. Learn more about the competition guidelines and submit your
                        abstract today
                    </div>
                    <div class="group-hover:text-warna-temp-02 font-semibold mt-auto">
                        Learn More
                        <x-heroicon-o-arrow-long-right
                            class="w-5 h-5 inline group-hover:translate-x-2 duration-300 transition-transform" />
                    </div>
                </div>
            </a>
            <a href="{{ url('general-information') }}" class="w-full md:w-1/2 p-4 group h-auto wow fadeInUp animated">
                <div class="p-4 bg-white rounded-xl shadow-lg h-full">
                    <span class="rounded-full p-3 bg-cyan-100 w-20 h-20 flex items-center justify-center mb-4">
                        <x-sui-ticket class="w-10 h-10 text-cyan-500 inline" />
                    </span>
                    <div class="font-semibold text-lg mb-2 text-slate-800">
                        Make your enjoyable experience at PAQS 2025
                    </div>
                    <div class="text-slate-500 mb-4">
                        Make sure you have everything needed for your enjoyable experience on PAQS 2025
                    </div>
                    <div class="group-hover:text-warna-temp-02 font-semibold mt-auto">
                        Learn More
                        <x-heroicon-o-arrow-long-right
                            class="w-5 h-5 inline group-hover:translate-x-2 duration-300 transition-transform" />
                    </div>
                </div>
            </a>

        </div>
    </section>

    {{-- Register --}}
    <section class="mt-120 mb-120 max-w-[100rem] mx-auto md:mb-40">
        <div class="container">
            <div
                class="flex items-center bg-slate-800 p-8 rounded-[30px] relative before:bg-[url('{{ asset('img/blue-background.png') }}')] before:bg-cover before:block before:h-full before:w-full before:absolute before:rounded-[30px] before:z-0 wow fadeInUp animated">
                <div class="flex-1 hidden lg:block">
                    <img src="{{ asset('img/Register Now.png') }}" class="h-80 mx-auto scale-[1.75]">
                </div>
                <div class="flex-1">
                    <div class="md:px-24">
                        <p class="text-4xl font-bold"><span class="text-white">Register</span>
                            and
                            Secure
                            Your Spot at PAQS
                            2025!</p>
                        <p class="mt-4 text-xl text-sky-600">Don’t miss out on the opportunity
                            to:</p>
                        <table class="border-none mb-4" border="0">
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">
                                    Learn
                                    from industry leaders and experts. </td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">
                                    Network
                                    with a global community of professionals.</td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">
                                    Gain
                                    valuable insights and advance your career. </td>
                            </tr>
                            <tr class="">
                                <td class="border-none align-top p-0"><x-heroicon-c-check
                                        class="w-7 h-7 text-sky-400" /></td>
                                <td class="border-none align-top pl-2 pb-2 pt-0 pr-0 text-sky-600 text-xl">
                                    <strong>Register Now:</strong> Secure your spot at PAQS
                                    Congress 2025 and unlock a
                                    world of possibilities!
                                </td>
                            </tr>
                        </table>
                        <a href="{{ url('/registration') }}" class="btn mx-auto"></i> Register
                            Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mb-10">
        <div class="text-center text-4xl font-semibold text-warna-temp-02 mb-4 wow fadeInUp animated">Glimpse from our
            last session </div>

        <swiper-container class="mySwiper" pagination="false" navigation="false" centered-slides="true"
            autoplay-delay="0" slides-per-view="5" space-between="10" loop="true" speed="3000">

            <?php for ($i = 1; $i < 15; $i++) { ?>
            <swiper-slide>
                <img src="{{ asset('img/dokumentasi/dokumentasi-' . $i . '.jpg') }}"
                    class="rounded-xl md:brightness-50 hover:brightness-100 md:grayscale hover:grayscale-0"></swiper-slide>
            <?php } ?>
        </swiper-container>
        {{-- <div class="slider">
            <?php for ($i = 1; $i < 15; $i++) { ?>
            <div class="p-2 flex justify-center items-center">
                <img src="{{ asset('img/dokumentasi/dokumentasi-' . $i . '.jpg') }}"
                    class="rounded-xl md:brightness-50 hover:brightness-100 md:grayscale hover:grayscale-0">
            </div>
            <?php } ?>
        </div> --}}
    </section>

</main>

@include('frontend.components.footer')
