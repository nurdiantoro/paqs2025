@include('frontend.components.header')
@include('frontend.components.navbar')
<!-- main-area -->
<main>
    <!-- slider-area -->
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
    <!-- slider-area-end -->
    <!-- about-area -->
    <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
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
    <!-- about-area-end -->
    <!-- team-area -->
    <section id="team" class="team-area p-relative pt-120 pb-120 fix">
        <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <h2>Speakers</h2>
        </div>
        <div class="circal1 item-zoom-inout"></div>
        <div class="circal2 item-zoom-inout"></div>
        <div class="circal3 item-zoom-inout"></div>
        <div class="circal4 item-zoom-inout"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-80">
                        <span class="wow fadeInUp animated" data-animation="fadeInUp animated"
                            data-delay=".2s">Angels</span>
                        <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s">
                            Event Speakers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="team-thumb">
                            <img src="img/speaker_1.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>James D. Franklin</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="team-thumb">
                            <img src="img/speaker_2.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>Natosha W. Green</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="tag">Gold</div>
                        <div class="team-thumb">
                            <img src="img/speaker_3.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>Brian J. Swanson</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="team-thumb">
                            <img src="img/speaker_4.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>Stephanie D. Gray</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="team-thumb">
                            <img src="img/speaker_5.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>James D. Franklin</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="team-thumb">
                            <img src="img/speaker_6.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>Natosha W. Green</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="team-thumb">
                            <img src="img/speaker_7.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>Brian J. Swanson</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInDown animated" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    <div class="single-team text-center pt-50  pb-50 mb-30">
                        <div class="team-thumb">
                            <img src="img/speaker_8.png" alt="img">
                        </div>
                        <div class="team-info">
                            <h5>Stephanie D. Gray</h5>
                            <p>Founder & CEO</p>
                            <strong>Fire Epic Ltd.</strong>
                            <div class="team-social pt-15 pb-15 mb-15">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                            <span>Content Writer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->
    <!-- counter-area -->
    <div class="counter-area pt-120 pb-120" style="background-image:url(img/counter_bg.jpg);background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="about-title second-atitle">
                        <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Why
                            Join Ovent</span>
                        <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
                            Join us at 110th oVent Expo.</h2>
                        <h5 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
                            Shift your perspective on digital business</h5>
                    </div>
                    <ul class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <li>
                            <img src="img/calendar.png" alt="img">
                            <span>Study in a newly-refreshed campus located in the heart of Berlin, Europe's
                                start-up capital. Berlin is a fantastic place to study as there</span>
                        </li>
                        <li>
                            <img src="img/comments.png" alt="img">
                            <span>Study in a newly-refreshed campus located in the heart of Berlin, Europe's
                                start-up capital. Berlin is a fantastic place to study as there</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-counter text-center mb-30 cr1">
                        <div class="counter p-relative">
                            <span class="count">20</span>
                            <small>+</small>
                        </div>
                        <p>Sponsors</p>
                    </div>
                    <div class="single-counter text-center mb-30 cr2">
                        <div class="counter p-relative">
                            <span class="count">100</span>
                            <small>+</small>
                        </div>
                        <p>Cool Speakers</p>
                    </div>
                    <div class="single-counter text-center mb-30 cr3">
                        <div class="counter p-relative">
                            <span class="count">5</span>
                            <small>+</small>
                        </div>
                        <p>Happy People</p>
                    </div>
                    <div class="cr4"></div>
                    <div class="cr5"></div>
                    <div class="cr6"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- counter-area-end -->
    <!-- event -->
    <div class="event fix pt-120 pb-120">
        <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <h2>Event</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-80">
                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated"
                        data-delay=".2s">Event</span>
                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Event
                        On Trend</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <nav class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab"
                                href="#one" role="tab" aria-selected="true">
                                <img src="img/t-icon.png" alt="img" class="drk-icon">
                                <img src="img/t-w-icon1.png" alt="img" class="lgt-icon">
                                <div class="nav-content">
                                    <strong>First Day</strong>
                                    <span>10th January 2019</span>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#two"
                                role="tab" aria-selected="false"><img src="img/t-icon.png" alt="img"
                                    class="drk-icon">
                                <img src="img/t-w-icon1.png" alt="img" class="lgt-icon">
                                <div class="nav-content">
                                    <strong>Second Day</strong>
                                    <span>10th January 2019</span>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#three"
                                role="tab" aria-selected="false"><img src="img/t-icon.png" alt="img"
                                    class="drk-icon">
                                <img src="img/t-w-icon1.png" alt="img" class="lgt-icon">
                                <div class="nav-content">
                                    <strong>Third Day</strong>
                                    <span>10th January 2019</span>
                                </div>
                            </a>
                            <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#four"
                                role="tab" aria-selected="false"><img src="img/t-icon.png" alt="img"
                                    class="drk-icon">
                                <img src="img/t-w-icon1.png" alt="img" class="lgt-icon">
                                <div class="nav-content">
                                    <strong>Fourth Day</strong>
                                    <span>10th January 2019</span>
                                </div>
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="one" role="tabpanel"
                            aria-labelledby="nav-home-tab">
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
                                        <div class="crical"><i class="fal fa-magic"></i> </div>
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
                                        <div class="crical"><i class="far fa-cogs"></i> </div>
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
                                        <div class="crical"><i class="fal fa-ban"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- row loop -->

                        </div>
                        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="nav-profile-tab">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 justify-content-center text-center">
                    <a href="#" class="btn mt-20 mr-10">More Program +</a>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area-end -->
    <!-- pricing-area -->
    <section id="pricing" class="pricing-area pt-113 pb-90 fix"
        style="background-image:url(img/pricing_bg.jpg);background-size: cover;">
        <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <h2>Plans</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-80">
                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Our
                        plans</span>
                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".4s">Get
                        Your Ticket</h2>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box text-center mb-30 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="pricing-head" style="background: url({{ asset('img/pricing-box-bg.png') }});">
                            <h4>early bird</h4>
                            <div class="price-count mb-30">
                                <h2><small>$</small>200</h2>
                            </div>
                        </div>
                        <div class="pricing-body mb-40">
                            <p>Time to sit down and think about what kind of content should be created, time to
                                stop.</p>
                            <strong>All prices exclude 25% VAT</strong>
                            <div class="bar">
                                <span style="width:50%;"></span>
                            </div>
                            <div class="bar-no">350/500</div>
                            <div class="pricing-btn mt-40">
                                <a href="#" class="btn"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box active text-center mb-30 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="tag">Exclusive author</div>
                        <div class="pricing-head" style="background: url({{ asset('img/pricing-box-bg.png') }});">
                            <h4>Gold</h4>
                            <div class="price-count mb-30">
                                <h2><small>$</small>399</h2>
                            </div>
                        </div>
                        <div class="pricing-body mb-40">
                            <p>Time to sit down and think about what kind of content should be created, time to
                                stop.</p>
                            <strong>All prices exclude 25% VAT</strong>
                            <div class="bar">
                                <span style="width:50%;"></span>
                            </div>
                            <div class="bar-no">350/500</div>
                            <div class="pricing-btn mt-40">
                                <a href="#" class="btn"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box text-center mb-30 wow fadeInDown animated"
                        data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="pricing-head" style="background: url({{ asset('img/pricing-box-bg.png') }});">
                            <h4>Platinum</h4>
                            <div class="price-count mb-30">
                                <h2><small>$</small>499</h2>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <p>Time to sit down and think about what kind of content should be created, time to
                                stop.</p>
                            <strong>All prices exclude 25% VAT</strong>
                            <div class="bar">
                                <span style="width:50%;"></span>
                            </div>
                            <div class="bar-no">350/500</div>
                            <div class="pricing-btn mt-40">
                                <a href="#" class="btn"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->
    <!-- Sponsors-area -->
    <section class="sponsors services-bg pt-113 fix">
        <div class="container">
            <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">
                <h2>Sponsors</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title mb-80">
                        <span class="wow fadeInUp animated" data-animation="fadeInUp animated"
                            data-delay=".2s">Sponsors</span>
                        <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
                            Happy Sponsors</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 text-right">
                    <a href="#" class="btn wow fadeInUp animated" data-animation="fadeInUp animated"
                        data-delay=".2s"><i class="far fa-ticket-alt"></i> Buy Ticket</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <ul class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <li><a href="#"><img src="img/sponsors_1.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_2.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_3.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_4.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_5.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_6.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_7.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_8.png" alt="img"></a></li>
                        <li><a href="#"><img src="img/sponsors_9.png" alt="img"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="s-video-wrap wow fadeInUp animated" data-animation="fadeInUp animated"
                        data-delay=".2s" style="background-image:url(img/video_bg.png)">
                        <div class="s-video-content mb-80">
                            <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="popup-video mb-50"><i
                                    class="fas fa-play"></i></a>
                            <h2>Intro Video</h2>
                            <p>The issue with any content strategy is time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsors-area-end -->

    <!-- blog-area -->
    <section id="blog" class="blog-area p-relative fix pt-100 pb-80">

        <div class="container">
            <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
                data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
                data-paroller-direction="horizontal">
                <h2>News</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title mb-80">
                        <span class="wow fadeInUp animated" data-animation="fadeInUp animated"
                            data-delay=".2s">feeds</span>
                        <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">
                            News Feeds</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 text-right">

                </div>
            </div>
            <div class="row blog-active2 wow fadeInDown animated" data-animation="fadeInDown animated"
                data-delay=".2s">
                <div class="col-lg-4 col-md-6">
                    <div class="single-post mb-30">
                        <div class="blog-thumb">
                            <a href="blog-details.html"><img src="img/blog_img_1.jpg" alt="img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="b-meta mb-20">
                                <ul>
                                    <li><i class="far fa-comments"></i>35 Comments</li>
                                    <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">The issue with any content strategy is time.</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisi
                                cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post active mb-30">
                        <div class="blog-thumb">
                            <a href="blog-details.html"><img src="img/blog_img_2.jpg" alt="img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="b-meta mb-20">
                                <ul>
                                    <li><i class="far fa-comments"></i>35 Comments</li>
                                    <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Time to sit down and think about what kind of
                                    content</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisi
                                cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post mb-30">
                        <div class="blog-thumb">
                            <a href="blog-details.html"><img src="img/blog_img_3.jpg" alt="img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="b-meta mb-20">
                                <ul>
                                    <li><i class="far fa-comments"></i>35 Comments</li>
                                    <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Should be created, time to stop and write, or
                                    record.</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisi
                                cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-post mb-30">
                        <div class="blog-thumb">
                            <a href="blog-details.html"><img src="img/blog_img_2.jpg" alt="img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="b-meta mb-20">
                                <ul>
                                    <li><a href="#"><i class="far fa-user"></i>by Admin</a></li>
                                    <li><i class="far fa-comments"></i>35 Comments</li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">User Experience Psychology And Performance
                                    Smashing</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisi
                                cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
