@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="event fix pt-120 pb-120 md:px-80">
        <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <h2>Event</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-80">
                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated"
                        data-delay=".2s">Timeline</span>
                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Programme
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
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




                        {{-- <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_1.png" alt="img">
                                            <h5>Rosalina William</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>UX Design Trend Party 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_2.png" alt="img">
                                            <h5>Kelian M. Bappe</h5>
                                            <p>youtubing</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Rokolo DJ Dancing 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_3.png" alt="img">
                                            <h5>Hiliniam Nelson</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Google Youtube Stratigic Party</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_4.png" alt="img">
                                            <h5>Kimjing J. Jalim</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Intro Jiknim Jikis 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                        </div>
                        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_1.png" alt="img">
                                            <h5>Rosalina William</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>UX Design Trend Party 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_2.png" alt="img">
                                            <h5>Kelian M. Bappe</h5>
                                            <p>youtubing</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Rokolo DJ Dancing 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_3.png" alt="img">
                                            <h5>Hiliniam Nelson</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Google Youtube Stratigic Party</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_4.png" alt="img">
                                            <h5>Kimjing J. Jalim</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Intro Jiknim Jikis 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                        </div>
                        <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_1.png" alt="img">
                                            <h5>Rosalina William</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>UX Design Trend Party 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_2.png" alt="img">
                                            <h5>Kelian M. Bappe</h5>
                                            <p>youtubing</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Rokolo DJ Dancing 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_3.png" alt="img">
                                            <h5>Hiliniam Nelson</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Google Youtube Stratigic Party</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                            <!-- row loop -->
                            <div class="row mb-30">
                                <div class="col-lg-2">
                                    <div class="user">
                                        <div class="title">
                                            <img src="img/event_avatar_4.png" alt="img">
                                            <h5>Kimjing J. Jalim</h5>
                                            <p>UX Deisgn</p>
                                        </div>
                                        <ul>
                                            <li><i class="fal fa-coffee"></i> Coffe & Snacks</li>
                                            <li><i class="fal fa-video"></i> Video Streming</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="event-list-content fix">
                                        <ul data-animation="fadeInUp animated" data-delay=".2s"
                                            style="animation-delay: 0.2s;" class="">
                                            <li><i class="fas fa-map-marker-alt"></i> Waterfront Hotel, London</li>
                                            <li><i class="far fa-clock"></i> 9.30 - 10.30 AM</li>
                                        </ul>
                                        <h2>Intro Jiknim Jikis 2019</h2>
                                        <p>In order to save time you have to break down the content strategy for the
                                            event or conference you are planning step by step. Creating this process
                                            from scratch will take the longest amount of time to build, but once you
                                            have content production foundation.</p>
                                        <a href="#" class="btn mt-20 mr-10"><i class="far fa-ticket-alt"></i>
                                            Buy Ticket</a>
                                        <a href="#" class="btn mt-20">Read More</a>
                                        <div class="crical"><i class="fal fa-video"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-12 justify-content-center text-center">
                    <a href="#" class="btn mt-20">Download Programme <x-gmdi-download-r
                            class="w-8 h-8 inline" /></a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
