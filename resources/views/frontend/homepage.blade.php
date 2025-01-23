@include('frontend.components.header')
@include('frontend.components.navbar')

<main>


    <section id="parallax"
        class="slider-area slider-bg second-slider-bg d-flex align-items-center justify-content-center fix min-h-screen relative z-0"
        style="background-image:url({{ url('img/PAQS-Opening-1.jpg') }})">

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
        <div class="absolute h-full w-full z-10 bg-black opacity-75"></div>

        <div class="slider-active relative z-50">
            <div class="single-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="slider-content second-slider-content">

                                <h2 data-animation="fadeInUp animated" data-delay=".4s" class="text-xl font-bold">PAQS
                                    CONGRESS
                                    <span class="text-sky-500">2025</span>
                                </h2>
                                <div countdown class="conterdown wow fadeInDown animated mb-4"
                                    data-animation="fadeInDown animated" data-delay=".2s"
                                    data-date="Aug 22 2025 00:00:00">
                                    <div class="flex flex-row gap-8 lg:gap-16 text-center text-white font-bold">
                                        <div class="">
                                            <span class="days text-2xl lg:text-6xl" data-days>0</span>
                                            <div class="smalltext">Days</div>
                                        </div>
                                        <div class="">
                                            <span class="hours text-2xl lg:text-6xl" data-hours>0</span>
                                            <div class="smalltext">Hours</div>
                                        </div>
                                        <div class="">
                                            <span class="minutes text-2xl lg:text-6xl" data-minutes>0</span>
                                            <div class="smalltext">Minutes</div>
                                        </div>
                                        <div class="">
                                            <span class="seconds text-2xl lg:text-6xl" data-seconds>0</span>
                                            <div class="smalltext">Seconds</div>
                                        </div>
                                        <p id="time-up"></p>
                                    </div>
                                </div>
                                <ul data-animation="fadeInUp animated" data-delay=".2s">
                                    <li><i class="fas fa-map-marker-alt"></i> Jakarta - Indonesia</li>
                                    <li><i class="far fa-clock"></i> 22 - 26 August 2025, </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 mb-10 md:py-40 md:mb-40 md:px-80 flex flex-col lg:flex-row gap-24 items-center">
        <div class="grow relative z-10">
            <p class="text-4xl font-bold text-warna-temp-02 mb-2 text-center wow fadeInLeft animated">2025 Congress
                Theme
            </p>
            <p
                class="text-center capitalize mb-2 md:mb-12 text-black font-semibold text-xl lg:w-1/2 lg:mx-auto wow fadeInLeft animated">
                Harnessing Ai
                And Digital
                Technology For Smart Construction Towards
                Net Zero, Decarbonizing And Innovative Building Materials </p>
            <div class="flex flex-wrap flex-col md:flex-row text-center gap-2 md:gap-8 wow fadeInLeft animated">
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

        <div class="wow fadeInRight animated flex-none relative w-64 hidden lg:block">
            <img src="{{ asset('img/cloud-computing.png') }}" class="w-80 absolute top-0 right-20 scale-[2] -z-10">
        </div>
    </section>

    <section class="py-10 mb-10 md:py-40 md:mb-40 md:px-80">
        <div class="container">
            <div
                class="flex items-center bg-slate-800 p-8 rounded-[30px] relative before:bg-[url('{{ asset('img/blue-background.png') }}')] before:bg-cover before:block before:h-full before:w-full before:absolute before:rounded-[30px] before:z-0">
                <div class="flex-1 wow fadeInUp animated hidden md:block">
                    <img src="{{ asset('img/Register Now.png') }}" class="h-80 mx-auto scale-[1.75]">
                </div>
                <div class="flex-1 wow fadeInUp animated">
                    <div class="md:px-24">
                        <p class="text-4xl font-bold"><span class="text-white">Register</span> and
                            Secure
                            Your Spot at PAQS
                            2025!</p>
                        <p class="mt-4 text-xl text-sky-600">Don’t miss out on the opportunity to:</p>
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
