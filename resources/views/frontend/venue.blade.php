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

        {{-- Conference Hall --}}
        <div class="flex flex-wrap">
            @foreach ($hotels as $hotel)
                <div class="w-full md:w-1/3 p-3 h-auto">
                    <div class="bg-white rounded p-4 flex flex-row group">
                        <div class="h-40 w-1/3 bg-slate-800 rounded-2xl overflow-hidden border-2 border-white shadow-md">
                            <img src="{{ $hotel->image_cover }}" class="group-hover:scale-110 transition duration-300"
                                alt="{{ $hotel->name }}">
                        </div>
                        <div class="pl-4 w-2/3 flex flex-col">
                            <div>
                                <span class="text-lg text-slate-800 font-semibold">{{ $hotel->name }}</span>
                                <span class="p-2 bg-yellow-50 text-amber-400 rounded-full inline">
                                    <x-bi-star-fill class="w-4 h-4 inline mr-1" />{{ $hotel->star }}
                                </span>
                            </div>
                            <span class="block mt-2">{{ $hotel->telephone }}</span>
                            <a href="{{ $hotel->location }}" target="_blank" class="block mt-auto">
                                <span
                                    class="mt-auto px-3 py-2 rounded-full bg-emerald-50 text-emerald-500 font-semibold hover:bg-emerald-100 transition duration-100">Book
                                    now</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
