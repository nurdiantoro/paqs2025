@include('frontend.components.header')

<main class="min-h-screen w-screen flex items-center justify-center p-2">
    <div class="flex flex-col justify-center items-center gap-4 w-full md:w-1/2 lg:w-1/3">

        <div class="p-4 border rounded-lg shadow bg-neutral-50 w-full">
            <img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}" alt="Logo PAQS" class="w-32 mx-auto mb-2">
            <div class="text-2xl font-bold text-warna-01 text-center mb-4">Scan your ticket</div>
            <form action="{{ url('/scan_ticket/store') }}" method="POST" class="flex gap-6 flex-col">
                <input type="number" class="form-control w-full border rounded-md border-gray-400 p-2"
                    placeholder="Ticket Number" name="no_invoice" required>
                <button type="submit" class="bg-warna-01 text-white p-2 rounded-md w-full">Scan</button>
            </form>
        </div>

        <div class="w-full bg-white rounded-lg border shadow p-4">
            <div>Recent Scan</div>
        </div>
    </div>
</main>


{{-- FOOTER Coding enggak pakai include karna ada penyesuaian --}}
{{-- @include('frontend.components.footer') --}}

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

@vite(['resources/js/footer.js'])

<script></script>

</body>

</html>
