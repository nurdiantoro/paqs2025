    <footer class="footer-p py-12 bg-warna-temp-01">
        <div class="container">
            <div
                class="flex flex-wrap justify-center gap-6 md:gap-0 md:justify-between items-center w-full mb-6 pb-6 border-bottom-1 border-slate-700">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}" alt="logo"
                            class="h-16 mx-auto"></a>
                </div>
                <ul class="flex flex-row flex-wrap gap-x-12 gap-y-4 justify-center text-white my-4 md:my-0">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/general-information') }}">Information</a></li>
                    <li><a href="{{ url('/call-for-paper') }}">Call for paper</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                    <li><a href="{{ url('/registration') }}">Registration</a></li>
                </ul>

                <div class="flex flex-row gap-8 text-white text-lg">
                    <a href="https://www.instagram.com/perkumpulan_iqsi"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.iqsi.org/"><i class="fas fa-globe"></i></a>
                    <a href="https://www.facebook.com/paqs.net/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.paqs.net/"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <p class="text-center">Copyright &copy; PAQS 2025. All Rights Reserved</p>
        </div>
    </footer>
    <!-- footer-end -->



    <!-- Eventes - Template -->
    <script src="{{ asset('js/eventes/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/eventes/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/eventes/popper.min.js') }}"></script>
    <script src="{{ asset('js/eventes/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/eventes/one-page-nav-min.js') }}"></script>
    <script src="{{ asset('js/eventes/slick.min.js') }}"></script>
    <script src="{{ asset('js/eventes/ajax-form.js') }}"></script>
    <script src="{{ asset('js/eventes/paroller.js') }}"></script>
    <script src="{{ asset('js/eventes/wow.min.js') }}"></script>
    <script src="{{ asset('js/eventes/parallax.min.js') }}"></script>
    <script src="{{ asset('js/eventes/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/eventes/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/eventes/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/eventes/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/eventes/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/eventes/element-in-view.js') }}"></script>
    <script src="{{ asset('js/eventes/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/eventes/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/eventes/main.js') }}"></script>

    {{-- Evonne - Template --}}
    <script src="{{ asset('evonne/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('evonne/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('evonne/js/main.js') }}"></script>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @vite(['resources/js/footer.js'])

    <script></script>

    </body>

    </html>
