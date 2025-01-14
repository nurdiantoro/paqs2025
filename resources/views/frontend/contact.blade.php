@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="mt-200 min-h-screen mb-50 px-80">
        <div class="container">

            <div class="wow fadeInUp animated text-4xl font-bold mb-4 text-black" data-animation="fadeInUp animated"
                data-delay=".2s">
                Contact Person</div>

            <div class="flex flex-wrap gap-12 mb-80">
                @foreach ($contacts as $contact)
                    <div class="flex-1 rounded-lg p-4 bg-white shadow-lg flex flex-col items-center">
                        <div
                            class="relative mb-4 before:contents-[''] before:absolute before:w-3 before:h-3 before:bg-green-500 before:outline before:outline-white before:rounded-full before:bottom-2 before:right-2 before:z-10">
                            <img src="
                            @if ($contact->gender == 'male') {{ asset('img/profile picture - man.jpg') }}
                            @else
                                {{ asset('img/profile picture - woman.jpg') }} @endif
                            "
                                class="w-24 h-24 rounded-full">
                        </div>
                        <span class="text-xl font-bold">{{ $contact->name }}</span>
                        <span class="text-slate-400">{{ $contact->formatted_telephone }}</span>
                        <a href="https://wa.me/{{ $contact->telephone }}" target="_blank"
                            class="mt-4 bg-green-100 flex flex-row gap-2 px-4 py-2 rounded-full text-green-800 hover:text-green-800 hover:bg-green-300">
                            <x-fab-whatsapp class="h-6 w-6" />
                            <span class="font-semibold">Whatsapp</span>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="flex gap-12 mb-80 bg-slate-800 p-8 rounded-[2rem] relative overflow-hidden">
                <div class="flex flex-col flex-1 z-20 gap-4">
                    <div class="wow fadeInUp animated text-4xl font-bold mb-2 text-white"
                        data-animation="fadeInUp animated" data-delay=".2s">
                        IQSI Secretariat</div>

                    <div class="text-lg text-white opacity-50 mb-6 lg:w-1/2">
                        Menara 165 Lt.4 Jl. TB Simatupang Kav 1, Cilandak Timur, Jakarta Selatan 12560,
                        Indonesia</div>
                    <a href="https://maps.app.goo.gl/JVTZPmUFqogj7ZS19" class="mr-auto">
                        <div
                            class="flex flex-row gap-2 text-white bg-warna-temp-02 rounded-full px-12 py-4 hover:shadow-lg duration-300 ease-in-out">
                            <x-bxs-direction-right class="w-6 h-6" />
                            <span class="font-bold text-lg">Get Direction</span>
                        </div>
                    </a>
                </div>

                <div class="flex-1 z-20">
                    <div class="w-full h-80 rounded-lg overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1174.7638884622168!2d106.80909255150115!3d-6.290478113959374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1fa5b9f59a3%3A0x772f6f7bc1fbc6c0!2sMenara%20165!5e1!3m2!1sid!2sid!4v1736871532955!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="100%"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <img src="{{ asset('img/maps.png') }}" class="absolute z-10 left-0 bottom-0 h-1/2 w-auto">
            </div>

            <div class="flex flex-row mb-80 gap-20">
                <div class="lg:w-1/2 mx-auto">
                    <span class="text-2xl font-bold text-black block mx-auto text-center mb-8">More Information</span>
                    <form action="">
                        <div class="flex flex-col gap-4 text-lg mb-2">
                            <div class="flex flex-row gap-4">
                                <input type="text" class="rounded-lg p-3 outline-none border-none flex-1"
                                    placeholder="First Name">
                                <input type="text" class="rounded-lg p-3 outline-none border-none flex-1"
                                    placeholder="Last Name">
                            </div>
                            <input type="text" class="rounded-lg p-3 outline-none border-none basis-full"
                                placeholder="Your email">
                            <textarea name="" id="" cols="" rows="10"
                                class="rounded-lg p-3 outline-none border-none basis-full" placeholder="Message..."></textarea>
                            <button type="submit"
                                class="mt-4 px-6 py-2 w-1/2 bg-warna-01 text-white mx-auto rounded-full">Send</button>
                        </div>
                    </form>
                    <div class="text-center">
                        or
                    </div>
                    <a href="mailto:inifo@paqs2025.com"
                        class="px-6 py-2 w-1/2  mx-auto rounded-full block text-center">Send
                        with
                        your Email</a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
