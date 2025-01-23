<!-- header -->

@php
    $navbarColor = 'hover:text-warna-temp-02 font-semibold text-gray-400';
    $home = $about = $information = $programme = $contact = 'text-gray-400';
    if (url()->current() == url('/')) {
        $home = 'text-warna-temp-02';
    } elseif (url()->current() == url('/about')) {
        $about = 'text-warna-temp-02';
    } elseif (url()->current() == url('/programme')) {
        $information = 'text-warna-temp-02';
    } elseif (url()->current() == url('/general-information')) {
        $information = 'text-warna-temp-02';
    } elseif (url()->current() == url('/venue')) {
        $information = 'text-warna-temp-02';
    } elseif (url()->current() == url('/invoice')) {
        $information = 'text-warna-temp-02';
    } elseif (url()->current() == url('/contact')) {
        $contact = 'text-warna-temp-02';
    } elseif (url()->current() == url('/news')) {
        $news = 'text-warna-temp-02';
    } elseif (url()->current() == url('/sponsor')) {
        $sponsor = 'text-warna-temp-02';
    } elseif (url()->current() == url('/registration')) {
        $registration = 'text-warna-temp-02';
    } else {
        if (url()->current() == url('/registration')) {
        }
    }
@endphp

<header id="home" class="header-area z-[999] relative">
    <div id="header-sticky" class="menu-area">
        <div class="container">
            <div class="second-menu p-0">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo w-24 lg:w-32">
                            <a href="{{ url('/') }}"><img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}"
                                    alt="logo" class="img-fluid drop-shadow"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-9">
                        <div class="responsive">
                            <x-heroicon-o-bars-3-bottom-right
                                class="w-6 h-6 hover:text-warna-temp-02 font-semibold text-slate-400" />
                        </div>
                        <div class="main-menu text-right text-xl-center">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-sub {{ $home . ' ' . $navbarColor }}">
                                        <a href="{{ url('/') }}">
                                            <span class="text-2xl">Home</span>
                                        </a>
                                    </li>
                                    <li class="has-sub {{ $about . ' ' . $navbarColor }}">
                                        <a href="{{ url('about') }}">
                                            <span class="text-2xl">About</span>
                                        </a>
                                    </li>
                                    <li class="has-sub {{ $information . ' ' . $navbarColor }}">
                                        <a href="#">
                                            <span class="text-2xl">Information</span>
                                        </a>
                                        <ul>
                                            <li><a href="{{ url('programme') }}">Programme</a></li>
                                            <li><a href="{{ url('general-information') }}">General Information</a></li>
                                            <li><a href="{{ url('venue') }}">Venue & Acomodation</a></li>
                                            <li><a href="{{ url('invoice') }}">Check Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub {{ $contact . ' ' . $navbarColor }}">
                                        <a href="{{ url('contact') }}">
                                            <span class="text-2xl">Contact</span>
                                        </a>
                                    </li>
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


{{-- <nav id="navbarNew" class="z-50 w-full transition-all duration-300 absolute top-0 md:px-80 py-4">
    <div class="mx-auto flex items-center justify-between">
        <div class="logo w-24 lg:w-32">
            <a href="{{ url('/') }}"><img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}" alt="logo"
                    class="img-fluid drop-shadow"></a>
        </div>
        <ul class="flex flex-row gap-12 text-xl mt-auto">
            <li id="list-navbar" class="p-3 hover:text-warna-temp-02 font-semibold text-slate-400 group">
                <a class="{{ $navbarColor }}" href="{{ url('/') }}">
                    <span class="">Home</span>
                </a>
            </li>
            <li id="list-navbar" class="p-3 hover:text-warna-temp-02 font-semibold text-slate-400 group">
                <a class="{{ $navbarColor }}" href="{{ url('about') }}">
                    <span class="">About</span>
                </a>
            </li>
            <li id="list-navbar" class="p-3 hover:text-warna-temp-02 font-semibold text-slate-400 group relative">
                <a class="{{ $navbarColor }}" href="#">
                    <span class="">Information</span>
                </a>
                <ul id="submenu"
                    class="flex flex-col gap-4 absolute bottom-0 left-0 text-nowrap translate-y-full duration-100 opacity-0 group-hover:opacity-100 mt-10 p-3">
                    <li>
                        <a href="{{ url('programme') }}">
                            <span
                                class="hover:text-warna-temp-02 font-semibold text-slate-400 block py-2">Programme</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('general-information') }}">
                            <span class="hover:text-warna-temp-02 font-semibold text-slate-400 block py-2">General
                                Information</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('venue') }}">
                            <span class="hover:text-warna-temp-02 font-semibold text-slate-400 block py-2">Venue &
                                Acomodation</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('invoice') }}">
                            <span class="hover:text-warna-temp-02 font-semibold text-slate-400 block py-2">Check
                                Invoice</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li id="list-navbar" class="p-3 hover:text-warna-temp-02 font-semibold text-slate-400 group">
                <a class="{{ $navbarColor }}" href="{{ url('contact') }}">
                    <span class="">Contact</span>
                </a>
            </li>
        </ul>
        <div>
            <a href="{{ url('registration') }}" class="btn"><i class="fas fa-sign-in-alt"></i> Registration</a>
        </div>
        <div class="md:hidden">
            <button class="hover:text-warna-temp-02 font-semibold text-slate-400" id="menu-toggle">
                <span class="" class="hover:text-warna-temp-02 font-semibold text-slate-400">&#9776;</span>
            </button>
        </div>
    </div>
</nav> --}}
