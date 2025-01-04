@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="event fix pt-120 pb-120 lg:px-80">
        <div class="section-t team-t paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15"
            data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <h2>Event</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-80">
                    <span class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Congress
                        Information</span>
                    <h2 class="wow fadeInUp animated" data-animation="fadeInUp animated" data-delay=".2s">Venue and
                        Accomodation
                    </h2>
                </div>
            </div>
        </div>

        {{-- Conference Hall --}}
        <div class="rounded-xl bg-white shadow-xl p-4 mb-80">
            <p class="text-4xl font-bold text-black mb-4">Conference Hall</p>
            <div class="flex gap-4 mb-8">
                <div class="basis-1/3 rounded-lg overflow-hidden">
                    <img src="{{ asset('img/trembesi-1.jpg') }}" class="h-full">
                </div>
                <div class="basis-1/3 rounded-lg overflow-hidden">
                    <img src="{{ asset('img/trembesi-2.jpg') }}" class="h-full">
                </div>
                <div class="basis-1/3 rounded-lg overflow-hidden">
                    <img src="{{ asset('img/trembesi-3.jpg') }}" class="h-full">
                </div>
            </div>
            <div class="flex gap-16 mb-4">
                <div>
                    <p class="text-xl font-bold text-slate-600">Lorem Ipsum</p>
                    <p class="text-md mb-8 text-slate-600">Jl. Pahlawan Seribu Lot VIIA CBD - BSD,
                        Lengkong Gudang,
                        Serpong
                        Sub-District, South Tangerang City, Banten 15311</p>
                    <div class="flex flex-row gap-8 align-item-center">
                        <div class="flex gap-4 ">
                            <div class="flex flex-col items-center">
                                <x-gmdi-table-bar-o class="w-8 h-8 inline-block text-slate-300" />
                                <span class="font-bold text-slate-600">100 Tables</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <x-eos-chair-o class="w-8 h-8 inline-block text-slate-300" />
                                <span class="font-bold text-slate-600">600 Tables</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <x-gmdi-meeting-room-r class="w-8 h-8 inline-block text-slate-300" />
                                <span class="font-bold text-slate-600">4 Ballroom</span>
                            </div>
                        </div>
                        <div class="flex align-item-center border-l pl-8 gap-4">
                            <a href=""
                                class="px-4 py-3 rounded-full bg-slate-100 text-warna-01 hover:bg-warna-01 hover:text-white"><x-entypo-location
                                    class="w-6 h-6 inline mr-2" />Get
                                Directions</a>
                            <a href=""
                                class="px-4 py-3 rounded-full border border-slate-100 hover:bg-blue-100 hover:text-slate-900"><x-bi-telephone
                                    class="w-6 h-6 inline mr-2" />Hotline</a>
                            <a href=""
                                class="px-4 py-3 rounded-full border border-slate-100 hover:bg-blue-100 hover:text-slate-900"><x-tabler-world
                                    class="w-6 h-6 inline mr-2" />Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <p class="text-xl font-bold text-warna-temp-02 mb-2 text-left">Accommodations</p>
            <p class="mb-2 text-slate-600">The PAQS Congress 2025 will be held at The Rizqun International Hotel
                in Bandar Seri Begawan. We recommend booking a room here for your ease of travel.</p>
            <div class="flex flex-row gap-4">
                <div class="lg:basis-2/3">
                    <div class="rounded-xl bg-white shadow-xl mb-80 overflow-hidden">
                        <img src="{{ asset('img/The Rizqun International Hotel.jpg') }}"
                            class="w-full h-80 object-cover">
                        <div class="p-4">
                            <p class="text-2xl font-bold text-slate-800">
                                The Rizqun International Hotel
                                <span class="text-yellow-400 ml-2">
                                    <x-heroicon-s-star class="w-6 h-6 inline" />
                                    <x-heroicon-s-star class="w-6 h-6 inline" />
                                    <x-heroicon-s-star class="w-6 h-6 inline" />
                                    <x-heroicon-s-star class="w-6 h-6 inline" />
                                    <x-heroicon-o-star class="w-6 h-6 inline" />
                                </span>
                            </p>
                            <p class="text-md mb-4 text-slate-600">Abdul Razak Complex, Bandar Seri Begawan BE3519,
                                Brunei</p>
                            <div class="flex flex-row gap-6 mb-4">
                                <div class="flex items-center gap-2">
                                    <x-fluentui-food-24 class="w-6 h-6 inline text-slate-300" />
                                    <span class="text-slate-600">Buffet</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <x-heroicon-s-wifi class="w-6 h-6 inline text-slate-300" />
                                    <span class="text-slate-600">Wifi</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <x-ionicon-newspaper class="w-6 h-6 inline text-slate-300" />
                                    <span class="text-slate-600">Daily News</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <x-iconoir-gym class="w-6 h-6 inline text-slate-300" />
                                    <span class="text-slate-600">Gym</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <x-gmdi-pool class="w-6 h-6 inline text-slate-300" />
                                    <span class="text-slate-600">Swimming Pool</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <x-fas-pray class="w-6 h-6 inline text-slate-300" />
                                    <span class="text-slate-600">Praying Room</span>
                                </div>
                                {{-- <table class="text-center">
                                    <tr class="text-slate-300">
                                        <td class="border-none align-top pt-0"><x-fluentui-food-24
                                                class="w-6 h-6 inline" />
                                        </td>
                                        <td class="border-none align-top pt-0"><x-heroicon-s-wifi
                                                class="w-6 h-6 inline" />
                                        </td>
                                        <td class="border-none align-top pt-0"><x-ionicon-newspaper
                                                class="w-6 h-6 inline" />
                                        </td>
                                        <td class="border-none align-top pt-0"><x-iconoir-gym class="w-6 h-6 inline" />
                                        </td>
                                        <td class="border-none align-top pt-0"><x-gmdi-pool class="w-6 h-6 inline" />
                                        </td>
                                        <td class="border-none align-top pt-0"><x-fas-pray class="w-6 h-6 inline" />
                                        </td>
                                    </tr>
                                    <tr class="text-slate-600">
                                        <td class="border-none align-top pt-0">Buffet</td>
                                        <td class="border-none align-top pt-0">Wifi</td>
                                        <td class="border-none align-top pt-0">Daily News</td>
                                        <td class="border-none align-top pt-0">Gym</td>
                                        <td class="border-none align-top pt-0">Swimming Pool </td>
                                        <td class="border-none align-top pt-0">Praying Room</td>
                                    </tr>
                                </table> --}}
                            </div>
                            <div class="flex flex-row gap-8 items-center">
                                <a href=""
                                    class="py-2 font-bold text-warna-01 hover:text-warna-01 flex items-center">
                                    <x-entypo-location class="w-5 h-5 inline mr-1" />
                                    Get Directions
                                </a>
                                <a href=""
                                    class="py-2 font-bold text-warna-01 hover:text-warna-01 flex items-center">
                                    <x-bi-telephone class="w-5 h-5 inline mr-1" />
                                    Hotline
                                </a>
                                <a href=""
                                    class="py-2 font-bold text-warna-01 hover:text-warna-01 flex items-center">
                                    <x-tabler-world class="w-5 h-5 inline mr-1" />
                                    Website
                                </a>
                                <a href=""
                                    class="font-bold text-warna-01 hover:text-warna-01 flex items-center bg-slate-100 p-2 rounded-full">
                                    <x-heroicon-o-ticket class="w-5 h-5 inline mr-1 " />
                                    Booking
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="lg:basis-1/2 rounded-xl bg-white shadow-xl mb-80 p-2 pt-4">
                    <p class="text-xl font-bold text-warna-temp-02 mb-2 text-left">Other Recommended Hotels</p>
                    <p class="mb-2 text-slate-600">If Delegates prefer to stay at other hotels, please note that they
                        are responsible for making their own travel arrangements to and from the Congress Venue. Here
                        are some other recommended hotels in the area:</p>
                    <div class="flex flex-col gap-2">
                        <div class="border rounded-lg flex flex-row p-2 gap-2">
                            <img src="{{ asset('img/The Rizqun International Hotel.jpg') }}"
                                class="w-1/3 h-32 object-cover rounded-md">
                            <div class="flex flex-col w-full">
                                <span class="text-slate-600 font-semibold">The Centrepoint Hotel</span>
                                <span class="text-yellow-400">
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-o-star class="w-5 h-5 inline" />
                                    <x-heroicon-o-star class="w-5 h-5 inline" />
                                </span>
                                <a href=""
                                    class="font-bold text-warna-01 hover:text-warna-01  p-2 rounded-full mt-4">
                                    <x-heroicon-o-ticket class="w-5 h-5 inline mr-1 " />
                                    <span>Booking</span>
                                </a>
                            </div>
                        </div>
                        <div class="border rounded-lg flex flex-row p-2 gap-2">
                            <img src="{{ asset('img/The Rizqun International Hotel.jpg') }}"
                                class="w-1/3 h-32 object-cover rounded-md">
                            <div class="flex flex-col w-full">
                                <span class="text-slate-600 font-semibold">J Hotel</span>
                                <span class="text-yellow-400">
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-o-star class="w-5 h-5 inline" />
                                    <x-heroicon-o-star class="w-5 h-5 inline" />
                                </span>
                                <a href=""
                                    class="font-bold text-warna-01 hover:text-warna-01  p-2 rounded-full mt-4">
                                    <x-heroicon-o-ticket class="w-5 h-5 inline mr-1 " />
                                    <span>Booking</span>
                                </a>
                            </div>
                        </div>
                        <div class="border rounded-lg flex flex-row p-2 gap-2">
                            <img src="{{ asset('img/The Rizqun International Hotel.jpg') }}"
                                class="w-1/3 h-32 object-cover rounded-md">
                            <div class="flex flex-col w-full">
                                <span class="text-slate-600 font-semibold">Higher Hotel Brunei</span>
                                <span class="text-yellow-400">
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-s-star class="w-5 h-5 inline" />
                                    <x-heroicon-o-star class="w-5 h-5 inline" />
                                    <x-heroicon-o-star class="w-5 h-5 inline" />
                                </span>
                                <a href=""
                                    class="font-bold text-warna-01 hover:text-warna-01  p-2 rounded-full mt-4">
                                    <x-heroicon-o-ticket class="w-5 h-5 inline mr-1 " />
                                    <span>Booking</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
