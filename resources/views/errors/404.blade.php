@include('frontend.components.header')

<main class="min-h-screen w-screen flex items-center justify-center">
    <div class="flex items-center flex-col max-w-xl relative z-50">

        {{-- <img src="{{ asset('img/LOGO PAQS CONGRESS.png') }}" class="w-40 mb-20"> --}}
        <span class="text-9xl font-bold text-slate-800 mb-20">404</span>
        <span class="text-4xl font-bold text-warna-01">Oops, page not found</span>
        <p class="text-center text-gray-900">it looks like you've stumbled upon a page that doesn't exist! Don't worry,
            it's not the
            end of the world.
            Try
            searching for what you're looking for or head back to our homepage.</p>
    </div>

    <div class="absolute w-screen h-screen flex justify-center items-center">
        <x-solar-sad-square-bold-duotone class="w-[60rem] h-[60rem] opacity-5" />
    </div>

</main>

@include('frontend.components.footer-errors')
