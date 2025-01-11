@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="mt-200 min-h-screen mb-50 px-80">
        <div class="text-center">
            <span class="wow fadeInUp animated text-4xl text-black font-bold mb-12 block"
                data-animation="fadeInUp animated" data-delay=".2s">Programme
            </span>
            <div class="mb-60 text-center">
                <p class="font-semibold text-2xl text-black">Overview</p>
                <p class="text-gray-400 md:w-1/2 mx-auto">The annual congress of the Pacific Association of Quantity
                    Surveyors
                    (PAQS) is
                    a premier event that
                    brings together professionals, academics, and industry leaders in the field of quantity surveying
                    from across the Asia and Western Pacific region. This congress serves as a platform for sharing
                    knowledge, discussing advancements, and fostering collaboration among member countries.</p>
            </div>
        </div>

        <div class="container">


            <div class="mb-80 flex">
                <div class="flex-1">
                    <img src="{{ asset('img/programme.png') }}" class="scale-150">
                </div>
                <div class="flex-1 ">
                    <p class="font-semibold text-2xl text-black mb-4">Main Program</p>
                    <div class="text-gray-400 flex-col">

                        <!-- Accordion 1 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-1" class="peer hidden" />
                                <label for="accordion-1"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">Young QS</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 ease-in-out">
                                    <div class="px-3 pb-3">
                                        <span>The Young QS Program is designed to support and develop young
                                            professionals in the field of
                                            Quantity Surveying. Its main activities are:</span>
                                        <ul class="mt-2 list-disc pl-5">
                                            <li class="list-disc">Seminars and Workshops</li>
                                            <li class="list-disc">Essay and Research Competitions</li>
                                            <li class="list-disc">Networking and meetings</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 2 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-2" class="peer hidden" />
                                <label for="accordion-2"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">PAQS Meeting</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 ease-in-out">
                                    <div class="px-3 pb-3">
                                        <span>Internal meetings among PAQS member countries consist of:</span>
                                        <ul class="mt-2 list-disc pl-5">
                                            <li class="list-disc">Committee meetings (Education, Digitalization,
                                                Research, and
                                                Sustainability)</li>
                                            <li class="list-disc">Member leadership meetings (Board Meetings) to discuss
                                                the developments
                                                in each member
                                                country
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 3 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-3" class="peer hidden" />
                                <label for="accordion-3"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">Call for Papers</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 ease-in-out">
                                    <div class="px-3 pb-3">
                                        <span>The Papers Conference provides a valuable platform for professionals and
                                            academics to share
                                            knowledge, collaborate, and contribute to the advancement of a more
                                            progressive and sustainable
                                            construction industry, with participants from various countries.</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 4 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-4" class="peer hidden" />
                                <label for="accordion-4"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">Plenary Session</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 ease-in-out">
                                    <div class="px-3 pb-3">
                                        <span>This session will discuss the main topics of the congress, including panel
                                            sessions and
                                            discussions, technical presentations, and research and innovation sessions
                                            from various
                                            countries
                                            that have participated in the Paper Conferences held over two days, open to
                                            the public and
                                            serving
                                            as a platform for networking to capture opportunities and
                                            collaboration.</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="mb-80">
                <p class="font-semibold text-2xl text-black mb-4">Social Activity Program</p>
                <div class="text-gray-500 flex gap-4">
                    <div class="rounded-xl flex-1 text-center bg-white shadow-lg p-2 group">
                        <div id="icon-blueprint" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4">
                        </div>
                        <span class="font-bold text-lg group-hover:text-black">Project Visit</span>
                    </div>
                    <div class="rounded-xl flex-1 text-center bg-white shadow-lg p-2 group">
                        <div id="icon-golf" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4"></div>
                        <span class="font-bold text-lg group-hover:text-black">Golf Tournament</span>
                    </div>
                    <div class="rounded-xl flex-1 text-center bg-white shadow-lg p-2 group">
                        <div id="icon-calendar" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4"></div>
                        <span class="font-bold text-lg group-hover:text-black">Spouse Program</span>
                    </div>
                    <div class="rounded-xl flex-1 text-center bg-white shadow-lg p-2 group">
                        <div id="icon-dinner" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4"></div>
                        <span class="font-bold text-lg group-hover:text-black">Gala Dinner</span>
                    </div>
                    <div class="rounded-xl flex-1 text-center bg-white shadow-lg p-2 group">
                        <div id="icon-exhibition" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4">
                        </div>
                        <span class="font-bold text-lg group-hover:text-black">Exhibition</span>
                    </div>
                </div>

            </div>

            <div class="flex flex-wrap">

                <div class="mb-80 basis-1/2">
                    <p class="font-semibold text-2xl text-black mb-4">2025 Congress Theme </p>
                    <p class="text-black mb-2">HARNESSING AI AND DIGITAL TECHNOLOGY FOR SMART CONSTRUCTION TOWARDS NET
                        ZERO, DECARBONIZING AND INNOVATIVE BUILDING MATERIALS</p>
                    <div class="text-gray-400 flex flex-col gap-2">
                        <span>AI-Driven Construction Innovations: Leveraging artificial intelligence
                            for predictive analytics, automation, and enhanced decision-making</span>
                        <span>Pathways to Net Zero and Decarbonization: Cutting-edge approaches to reducing carbon
                            footprints in construction processes.</span>
                        <span>Breakthroughs in Sustainable Materials: Next-generation materials that drive both
                            innovation and environmental responsibility. Modular and Prefabricated</span>
                        <span>Construction: Revolutionizing building techniques for speed, efficiency, and
                            sustainability.</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Timeline --}}
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <nav class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active show" id="day-one" data-toggle="tab" href="#one"
                                role="tab" aria-selected="true">
                                <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                                <x-heroicon-o-calendar-date-range class="lgt-icon w-12 h-12 text-white" />
                                <div class="nav-content">
                                    <strong>22<sup>nd</sup></strong>
                                    <span>August 2025</span>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#two"
                                role="tab" aria-selected="false">
                                <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                                <x-heroicon-o-calendar-date-range class="lgt-icon w-12 h-12 text-white" />
                                <div class="nav-content">
                                    <strong>23<sup>th</sup></strong>
                                    <span>August 2025</span>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#three"
                                role="tab" aria-selected="false">
                                <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                                <x-heroicon-o-calendar-date-range class="lgt-icon w-12 h-12 text-white" />
                                <div class="nav-content">
                                    <strong>24<sup>th</sup></strong>
                                    <span>August 2025</span>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#four"
                                role="tab" aria-selected="false">
                                <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                                <x-heroicon-o-calendar-date-range class="lgt-icon w-12 h-12 text-white" />
                                <div class="nav-content">
                                    <strong>25<sup>th</sup></strong>
                                    <span>August 2025</span>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab3" data-toggle="tab" href="#four"
                                role="tab" aria-selected="false">
                                <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                                <x-heroicon-o-calendar-date-range class="lgt-icon w-12 h-12 text-white" />
                                <div class="nav-content">
                                    <strong>26<sup>th</sup></strong>
                                    <span>August 2025</span>
                                </div>
                            </a>
                        </div>
                    </nav>


                    <div class="tab-content py-3 px-3 px-sm-0 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s" id="nav-tabContent">


                        <div class="tab-pane fade active show relative" id="one" role="tabpanel"
                            aria-labelledby="day-one">
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />08.00AM
                                    - 09.00AM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Young
                                    QS Programme</span>
                            </div>
                        </div>

                        <div class="tab-pane fade relative" id="two" role="tabpanel" aria-labelledby="day-one">
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />09.00AM
                                    - 11.00AM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Education
                                    & Accreditation Committee Meeting</span>
                            </div>
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />11.00AM
                                    - 01.00PM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Research
                                    Committe Meeting</span>
                            </div>
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />01.00PM
                                    - 03.00PM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Sustainability
                                    Committee Meeting</span>
                            </div>
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />03.00PM
                                    - 05.00PM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">BIM
                                    Committee Meeting</span>
                            </div>
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />06.30AM
                                    - 1.00PM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Golf
                                    Tournament</span>
                            </div>
                        </div>

                        <div class="tab-pane fade relative" id="three" role="tabpanel"
                            aria-labelledby="day-one">
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />08.30AM
                                    - 09.00AM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Registration</span>
                            </div>
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />09.00AM
                                    - 05.00PM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Board
                                    Meeting Session</span>
                            </div>
                            <div class="relative w-full text-center h-24">
                                <div
                                    class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                                </div>
                                <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                        class="w-6 h-6 inline mr-2" />07.00AM
                                    - 09.00PM</span>
                                <span
                                    class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">President
                                    Dinner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 justify-content-center text-center">
                    <a href="#" class="btn mt-20">Download Programme <x-gmdi-download-r
                            class="w-8 h-8 inline" /></a>
                </div>
            </div>
        </div> --}}
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
