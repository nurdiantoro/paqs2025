<!-- header -->

@php
    if (url()->current() == url('/')) {
        $navbarColor = 'text-white';
    } else {
        $navbarColor = 'gray-400';
    }
@endphp

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
                                    <li class="has-sub"><a class="{{ $navbarColor }}"
                                            href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="has-sub">
                                        <a class="{{ $navbarColor }}" href="{{ url('about') }}">About</a>
                                    </li>
                                    <li class="has-sub">
                                        <a class="{{ $navbarColor }}" href="#">Information</a>
                                        <ul>
                                            <li><a href="{{ url('programme') }}">Programme</a></li>
                                            <li><a href="{{ url('general-information') }}">General Information</a></li>
                                            <li><a href="{{ url('venue') }}">Venue & Acomodation</a></li>
                                            <li><a href="{{ url('invoice') }}">Check Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a class="{{ $navbarColor }}" href="#">Submission</a>
                                        <ul>
                                            <li><a href="{{ url('call-for-papers') }}">Call for Pappers</a></li>
                                            <li><a href="{{ url('competition') }}">PAQS-Iwata Scholarship
                                                    Competition</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="{{ $navbarColor }}" href="{{ url('contact') }}">Contact</a></li>
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
