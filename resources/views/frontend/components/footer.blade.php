    <footer class="footer-p py-12" style="background-color: var(--warna-02);">
        <div class="container">
            <div class="flex justify-between items-center w-full mb-6 pb-6 border-bottom-1 border-slate-700">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}" alt="logo"
                            class="h-16 mx-auto"></a>
                </div>
                <ul class="flex flex-row gap-12 text-white">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Registration</a></li>
                </ul>

                <div class="flex flex-row gap-8 text-white text-lg">
                    <a href="https://www.instagram.com/pujabrunei/"><i class="fab fa-instagram"></i></a>
                    <a href="https://pujabrunei.com/"><i class="fas fa-globe"></i></a>
                    <a href="https://www.facebook.com/paqs.net/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.paqs.net/"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <p class="text-center">Copyright &copy; 2022 PAQS. All Rights Reserved</p>
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

    @vite('resources/js/app.js')

    </body>

    </html>
