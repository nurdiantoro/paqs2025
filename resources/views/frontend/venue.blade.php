@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="mt-120 mb-120 max-w-[100rem] mx-auto">
        {{-- Title --}}
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center">
                    <p class="text-4xl font-bold wow fadeInUp animated z-10 mt-40 mb-4">Venue and Accomodation
                    </p>
                </div>
            </div>
        </div>

        {{-- Header --}}
        <div class="mb-52 flex flex-col md:flex-row h-[30rem] relative px-4">
            <img src="{{ asset('img/raffles-1.webp') }}" class="w-full h-full object-cover rounded-2xl">
            <div
                class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-[90%] md:w-3/4 lg:w-2/3 bg-white rounded-b-3xl md:rounded-3xl px-4 py-3 shadow-lg gap-4">
                <div class="flex flex-col mb-6">
                    <div>
                        <span class="font-bold text-2xl text-slate-800">Raffles Hotel</span>
                        <span class="mb-2 text-amber-400 rounded-full text-nowrap flex flex-row items-center">
                            <x-bi-star-fill class="w-4 h-4 inline mr-1 text-amber-400" />5 star
                        </span>
                    </div>

                    <div class="flex flex-col md:flex-row items-start">
                        <div class="w-full md:w-2/3 mb-4">
                            <span class="mb-2 inline-block">Jl. Prof. DR. Satrio Kav. 3-5, RT.18/RW.05, Kuningan, Karet
                                Kuningan,
                                Kecamatan
                                Setiabudi,
                                Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12940</span>
                            <a href="https://www.raffles.com/" target="_blank"
                                class="flex flex-row gap-2 mb-6 hover:text-warna-01">
                                <x-entypo-globe class="w-6 h-6" />
                                <span>raffles.com</span>
                            </a>
                            <a href="https://maps.app.goo.gl/hhj4fEUqv8RG1AaA8"
                                class="bg-warna-temp-02 rounded-full px-3 py-2 inline-block text-white font-semibold group">
                                <span class="inline-block mr-2">Get Directions</span>
                                <x-fas-arrow-right-long
                                    class="w-5 h-5 inline group-hover:translate-x-2 duration-300 transition-transform mr-2" />
                            </a>
                        </div>

                        {{-- Room booking - IQSI --}}
                        <div
                            class="w-full md:w-1/3 p-4 rounded-lg border mx-auto max-w-[40rem] text-center flex flex-col">
                            <div class="font-semibold">Room booking - IQSI</div>
                            <span>Send email to asking for room booking</span>
                            <a class="px-4 py-2 border-2 border-warna-temp-02 text-warna-temp-02 rounded-full mt-4"
                                href="mailto:bookus.jakarta@raffles.com?cc=belva.cordelya@raffles.com,ikram.brahmantyo@raffles.com&subject=Room booking - IQSI"
                                target="_blank">
                                Send Email
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Hotel --}}
        <div class="text-4xl font-bold wow fadeInUp animated z-10 mt-80 md:mt-40 mb-4 text-warna-01 text-center">Hotels
        </div>
        <div x-data="{ visibleCount: 9, total: {{ count($hotels) }} }">
            <div class="flex flex-wrap justify-center">
                @foreach ($hotels as $index => $hotel)
                    <div class="w-full md:w-1/2 lg:w-1/3 p-3 h-auto transition-all "
                        x-show="{{ $index }} < visibleCount">
                        <div class="bg-white rounded p-4 flex flex-row group">
                            <div
                                class="h-40 w-1/3 bg-gray-50-800 rounded-2xl overflow-hidden border-2 border-white shadow-md flex items-center justify-center">
                                <?php $hotel->image_cover ? ($img = 'storage/' . $hotel->image_cover) : ($img = 'img/no_image.png'); ?>
                                <img src="{{ asset($img) }}"
                                    class="group-hover:scale-110 transition duration-300 h-full w-full object-cover"
                                    alt="{{ $hotel->name }}">
                            </div>
                            <div class="pl-4 w-2/3 flex flex-col">
                                <div class="flex flex-col">
                                    <div class="flex flex-row justify-between">
                                        <span class="mb-2 text-amber-400 rounded-full inline text-nowrap">
                                            <x-bi-star-fill class="w-4 h-4 inline mr-1" />{{ $hotel->star }} star
                                        </span>
                                        <?php if($hotel->recomended == true) { ?>
                                        <span
                                            class="mb-2 text-sky-500 bg-sky-100 px-2 py-1 text-sm rounded-full inline text-nowrap">Recomended
                                        </span>
                                        <?php } ?>
                                    </div>
                                    <span class="text-lg text-slate-800 font-semibold">{{ $hotel->name }}</span>
                                </div>
                                <span class="block mt-2"><a
                                        href="tel:{{ $hotel->telephone }}">{{ $hotel->telephone }}</a></span>
                                <a href="{{ $hotel->location }}" target="_blank" class="block mt-auto">
                                    <span
                                        class="mt-auto px-3 py-2 rounded-md bg-emerald-50 text-emerald-500 font-semibold hover:bg-emerald-100 transition duration-100">Book
                                        now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Tombol View More -->
            <div class="text-center mt-4 px-4">
                <button @click="visibleCount = total" x-show="visibleCount < total"
                    class="px-4 py-2 rounded border-[1px] border-gray-500 w-full md:w-1/3 mx-auto hover:bg-warna-01 hover:text-white duration-100">
                    <span>View More</span>
                </button>
                <button @click="visibleCount = 9" x-show="visibleCount > 9"
                    class="px-4 py-2 rounded border-[1px] border-gray-500 w-full md:w-1/3 mx-auto hover:bg-slate-500 hover:text-white duration-100">
                    View Less
                </button>
            </div>
        </div>


    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
