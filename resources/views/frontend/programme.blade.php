@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="flex flex-col px-2 md:px-80 items-center h-[30rem] bg-center overflow-hidden relative bg-cover"
        style="background-image: url('{{ asset('img/dokumentasi/dokumentasi-7.jpg') }}');">
        <div class="text-center mx-auto mt-auto pb-10">
            <p class="text-4xl font-bold wow fadeInUp animated z-10 text-white mb-4">Programme</p>
            <p class="lg:w-1/2 text-white  wow fadeInUp animated mx-auto">The annual congress of the Pacific Association
                of Quantity
                Surveyors
                (PAQS) is
                a premier event that
                brings together professionals, academics, and industry leaders in the field of quantity surveying
                from across the Asia and Western Pacific region. This congress serves as a platform for sharing
                knowledge, discussing advancements, and fostering collaboration among member countries.</p>
        </div>
        <div class="absolute w-full h-full bg-black opacity-75">

        </div>
        {{-- <img src="{{ asset('img/meeting.jpg') }}" class="absolute w-full h-full object-cover brightness-[0.2]"> --}}
    </div>
    <div class="mt-200 min-h-screen mb-50 px-2 md:px-80">

        <div class="container">


            <div class="mb-80 flex flex-wrap-reverse">
                <div class="w-full md:w-1/2 md:translate-y-0 translate-y-[-50%] absolute bottom-0 md:relative ">
                    <img src="{{ asset('img/programme.png') }}" class="scale-150">
                </div>
                <div class="w-full md:w-1/2 ">
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

            <div class="mb-60">
                <p class="font-semibold text-2xl text-black mb-4">Social Activity Program</p>
                <div class="text-gray-500 flex flex-wrap justify-center">
                    <div class="p-2 md:w-1/5 w-1/2">
                        <div class="rounded-xl  text-center bg-white shadow-lg p-2 group">
                            <div id="icon-blueprint" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4">
                            </div>
                            <span class="font-bold text-lg group-hover:text-black">Project Visit</span>
                        </div>
                    </div>
                    <div class="p-2 md:w-1/5 w-1/2">
                        <div class="rounded-xl  text-center bg-white shadow-lg p-2 group">
                            <div id="icon-golf" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4"></div>
                            <span class="font-bold text-lg group-hover:text-black">Golf Tournament</span>
                        </div>
                    </div>
                    <div class="p-2 md:w-1/5 w-1/2">
                        <div class="rounded-xl  text-center bg-white shadow-lg p-2 group">
                            <div id="icon-calendar" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4">
                            </div>
                            <span class="font-bold text-lg group-hover:text-black">Spouse Program</span>
                        </div>
                    </div>
                    <div class="p-2 md:w-1/5 w-1/2">
                        <div class="rounded-xl  text-center bg-white shadow-lg p-2 group">
                            <div id="icon-dinner" class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4">
                            </div>
                            <span class="font-bold text-lg group-hover:text-black">Gala Dinner</span>
                        </div>
                    </div>
                    <div class="p-2 md:w-1/5 w-1/2">
                        <div class="rounded-xl  text-center bg-white shadow-lg p-2 group">
                            <div id="icon-exhibition"
                                class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4">
                            </div>
                            <span class="font-bold text-lg group-hover:text-black">Exhibition</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mb-80 flex flex-wrap gap-24">
                <div class="flex-1 z-10">
                    <p class="font-semibold text-2xl text-warna-temp-02 mb-4">2025 Congress Theme </p>
                    <div class=" mb-2 relative">
                        <x-bxs-quote-right
                            class="w-12 h-12 text-warna-01 absolute top-0 left-0 translate-x-1/2 -translate-y-1/2" />
                        <div id="theme" class="text-4xl font-bold text-warna-01 p-4 rounded-[2rem]  ">
                            {{-- Materi teks ada di js typewritter --}}
                        </div>
                    </div>
                </div>

                <div class="flex-1 text-gray-400 flex flex-row gap-4 z-10 bg-cover relative">
                    <div class="flex flex-wrap md:flex-col flex-1 gap-6">
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">AI-Driven Construction Innovations:</span>
                            Leveraging
                            artificial
                            intelligence
                            for predictive analytics, automation, and enhanced decision-making
                        </div>
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">Pathways to Net Zero and
                                Decarbonization:</span>
                            Cutting-edge
                            approaches to reducing carbon
                            footprints in construction processes.
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 gap-6 mt-8">
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">Breakthroughs in Sustainable Materials:</span>
                            Next-generation
                            materials that drive both
                            innovation and environmental responsibility. Modular and Prefabricated
                        </div>
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">Construction: </span>Revolutionizing building
                            techniques
                            for
                            speed,
                            efficiency, and
                            sustainability.
                        </div>
                    </div>

                    <img src="{{ asset('img/abstract-shape.png') }}"
                        class="w-1/2 absolute left-0 translate-x-1/2 -z-10 scale-125">
                </div>

                {{-- <img src="{{ asset('img/grid-3.png') }}" class="w-screen absolute left-0 z-10"> --}}
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
