@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="mt-120 mb-120 max-w-[100rem] mx-auto">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center">
                    <p class="text-4xl font-bold wow fadeInUp animated z-10 mt-40 mb-4">Venue and Accomodation
                    </p>
                </div>
            </div>
        </div>

        {{-- Hotel --}}
        <div x-data="{ visibleCount: 9, total: {{ count($hotels) }} }">
            <div class="flex flex-wrap justify-center">
                @foreach ($hotels as $index => $hotel)
                    <div class="w-full md:w-1/2 lg:w-1/3 p-3 h-auto" x-show="{{ $index }} < visibleCount">
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
                                    <span class="mb-2 text-amber-400 rounded-full inline text-nowrap">
                                        <x-bi-star-fill class="w-4 h-4 inline mr-1" />{{ $hotel->star }} star
                                    </span>
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
            <div class="text-center mt-4">
                <!-- Tombol View More -->
                <button @click="visibleCount = total" x-show="visibleCount < total"
                    class="px-4 py-2 bg-blue-500 text-white rounded">
                    View More
                </button>

                <!-- Tombol View Less -->
                <button @click="visibleCount = 9" x-show="visibleCount > 9"
                    class="px-4 py-2 bg-red-500 text-white rounded">
                    View Less
                </button>
            </div>
        </div>

        {{-- Room booking - IQSI --}}
        <div
            class="p-4 rounded-lg border mt-12 mx-auto w-full max-w-[40rem] text-lg text-center flex flex-col text-slate-800 hover:bg-white">
            <div class="text-2xl font-semibold">Room booking - IQSI</div>
            <span>Send email to asking for room booking</span>
            <table class="mt-4">
                <tr>
                    <td class="border-none text-left p-0">subject</td>
                    <td class="border-none text-left p-0">:</td>
                    <td class="border-none text-left p-0">Room booking - IQSI</td>
                </tr>
                <tr>
                    <td class="border-none text-left p-0">email to</td>
                    <td class="border-none text-left p-0">:</td>
                    <td class="border-none text-left p-0">bookus.jakarta@raffles.com</td>
                </tr>
                <tr>
                    <td class="border-none text-left p-0">cc</td>
                    <td class="border-none text-left p-0">:</td>
                    <td class="border-none text-left p-0">belva.cordelya@raffles.com</td>
                </tr>
                <tr>
                    <td class="border-none text-left p-0"></td>
                    <td class="border-none text-left p-0"></td>
                    <td class="border-none text-left p-0">ikram.brahmantyo@raffles.com</td>
                </tr>
            </table>
            <a class="px-4 py-2 bg-blue-500 text-white rounded mt-4"
                href="mailto:bookus.jakarta@raffles.com?cc=belva.cordelya@raffles.com,ikram.brahmantyo@raffles.com&subject=Room booking - IQSI"
                target="_blank">
                Send Email
            </a>

        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
