@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="flex flex-col px-2 md:px-80 items-center h-[30rem] bg-center overflow-hidden relative bg-cover"
        style="background-image: url('{{ asset('img/dokumentasi/dokumentasi-7.jpg') }}');">
        <div class="text-center mx-auto mt-auto pb-10">
            <p class="text-4xl font-bold wow fadeInUp animated z-10 text-white mb-4">Submission of Abstracts and Papers
            </p>
            {{-- <p class="lg:w-1/2 text-white  wow fadeInUp animated mx-auto">The annual congress of the Pacific Association
                of Quantity
                Surveyors
                (PAQS) is
                a premier event that
                brings together professionals, academics, and industry leaders in the field of quantity surveying
                from across the Asia and Western Pacific region. This congress serves as a platform for sharing
                knowledge, discussing advancements, and fostering collaboration among member countries.</p> --}}
        </div>
        <div class="absolute w-full h-full bg-black opacity-75">

        </div>
        {{-- <img src="{{ asset('img/meeting.jpg') }}" class="absolute w-full h-full object-cover brightness-[0.2]"> --}}
    </div>

    {{-- Poster --}}
    <div class="lg:mt-200 mb-50 px-2 md:px-80 container flex flex-wrap">

        <div class="flex justify-center w-full lg:w-1/3 p-4 wow animated fadeInLeftBig">
            <img src="{{ asset('img/call_for_paper_2.jpeg') }}" alt="call for paper" class="rounded-xl object-contain">
        </div>

        <div class="flex flex-col w-full lg:w-2/3 p-4 wow animated fadeInRightBig">
            <div class="text-warna-temp-02 font-bold text-4xl text-left w-full mb-2">CALL FOR PAPER – PAQS
                CONGRESS
                2025</div>
            <div class="rounded-xl bg-white shadow-xl p-8 border w-full h-full flex flex-col gap-4 justify-between">
                <div>
                    <p class="text-slate-800 font-semibold text-lg">Description</p>
                    <p class="text-slate-700 mb-3"><span class="font-bold">The Pacific Association of Quantity Surveyors
                            (PAQS) Congress 2025</span>
                        invites
                        researchers, academics,
                        and industry professionals to submit their papers and contribute to the advancement of smart
                        construction.</p>
                    <p class="text-slate-800 font-semibold text-lg">Conference Theme:</p>
                    <p class="text-slate-700 mb-3 italic"> Harnessing AI and Digital Technology for Smart Construction –
                        Towards Net Zero, Decarbonizing, and
                        Innovative Building Materials</p>
                    <p class="text-slate-800 font-semibold text-lg">
                        Key Topics:
                    </p>
                    <ul class="text-slate-700 mb-3 pl-4">
                        <li>AI-Driven Construction Innovations</li>
                        <li>Pathways to Net Zero and Decarbonization</li>
                        <li>Breakthroughs in Sustainable Materials</li>
                        <li>Modular and Prefabricated Construction</li>
                    </ul>
                    <p class="text-slate-700 mb-3">
                        Selected papers will be published in <span class="font-bold">Scopus-indexed journals</span>,
                        providing an opportunity for
                        global
                        recognition and impact.</p>
                    <ul class="text-slate-700 mb-3">
                        <li><span class="font-bold">📍 Conference Venue:</span> Hotel Raffles Jakarta</li>
                        <li><span class="font-bold">📆 Conference Dates:</span> 25-26 August 2025</li>
                        <li><span class="font-bold">📝 Paper Submission Deadline:</span> 15 June 2025</li>
                    </ul>
                    <p class="text-slate-700 mb-3">
                        For full submission guidelines and to submit your paper, please visit:
                        <br>
                        🔗
                        <a href="http://bit.ly/Submission-PAQS2025"
                            class="text-warna-temp-02 hover:text-warna-temp-02 hover:underline">
                            http://bit.ly/Submission-PAQS2025</a>
                    </p>
                    <p class="text-slate-700 mb-3">
                        For inquiries, contact: <span class="font-bold">Eno +62 812 1111 6900, Okta: +62 896
                            36132308</span></p>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ asset('documents/Fullpaper_Template_PAQS_Congress_2025.docx') }}" download=""
                        class="text-warna-temp-02 bg-rose-100 hover:text-white hover:bg-warna-temp-02 px-6 py-3 rounded-full hover:shadow-md">Download
                        Paper Template</a>
                    <a href="http://bit.ly/Submission-PAQS2025" target="_blank"
                        class="text-warna-temp-02 bg-rose-100 hover:text-white hover:bg-warna-temp-02 px-6 py-3 rounded-full hover:shadow-md">Book
                        now</a>
                </div>
            </div>
        </div>

    </div>

    {{-- Speakers Profile --}}
    <div class="container mb-[10rem]">
        <span class="text-2xl mb-2 font-semibold block text-warna-temp-02 text-center wow zoomIn animated">Featured
            Speaker</span>
        <div class="flex flex-wrap flex-col md:flex-row">
            @foreach ($speakers as $speaker)
                <div class="p-2 w-full md:w-1/2 lg:w-1/2 xl:w-1/4 wow zoomIn animated h-auto]">
                    <div
                        class="relative overflow-hidden rounded-xl border h-full shadow-md group bg-slate-50 hover:bg-warna-temp-01  cursor-pointer">
                        <div class="relative h-[40rem] overflow-scroll overflow-y-auto  cursor-pointer">
                            <div class="overflow-hidden rounded-full w-40 h-40 mx-auto bg-slate-50 z-30 border mt-4">
                                <img src="{{ asset('storage/' . $speaker->image) }}"
                                    class="object-cover group-hover:scale-105">
                            </div>

                            <div
                                class="text-xl text-center mb-2 font-bold text-slate-900  sticky top-0 z-10 bg-slate-50 group-hover:bg-warna-temp-01 group-hover:text-white p-4">
                                {{ $speaker->name }}
                            </div>
                            <div class=" p-4">
                                <p class="text-slate-500 group-hover:text-slate-300 ">
                                    {!! $speaker->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- @foreach ($speakers as $speaker)
                <div class="flip-card w-full md:w-1/2 lg:w-1/3 p-4">
                    <div class="flip-card-inner relative w-full h-[30rem]">
                        <div
                            class="flip-card-front shadow-md bg-white rounded-xl border p-4 h-full flex flex-col gap-4">
                            <img src="{{ asset('storage/' . $speaker->image) }}" alt="{{ $speaker->image }}"
                                style="overflow-hidden rounded-full mx-auto bg-slate-50 object-cover">
                            <div class="text-xl text-center mb-2 font-bold text-slate-900">
                                {{ $speaker->name }}
                            </div>
                        </div>
                        <div class="flip-card-back shadow-md">
                            <h1>John Doe</h1>
                            <p>Architect & Engineer</p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
            @endforeach --}}
            {{-- <p class="line-clamp-3 text-justify text-gray-500">{!! $speaker->description !!}</p> --}}
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
