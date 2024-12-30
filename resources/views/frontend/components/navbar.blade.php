<!-- header -->
<header id="home" class="header-area">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo w-24">
                            <a href="{{ url('/') }}"><img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}"
                                    alt="logo" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-9">
                        <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                        <div class="main-menu text-right text-xl-center">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="#">About</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="#">Information</a>
                                        <ul>
                                            <li><a href="#">Programme</a></li>
                                            <li><a href="#">General Information</a></li>
                                            <li><a href="#">Venue & Acomodation</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="#">Submission</a>
                                        <ul>
                                            <li><a href="#">Call for Pappers</a></li>
                                            <li><a href="#">PAQS-Iwata Scholarship Competition</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 text-right d-none d-xl-block">
                        <div class="header-btn second-header-btn">
                            <a href="{{ url('registration') }}" class="btn"><i class="fas fa-sign-in-alt"></i>
                                Registration</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
