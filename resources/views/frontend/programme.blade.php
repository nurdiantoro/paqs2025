@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="flex flex-col px-2 md:px-80 items-center h-[30rem] bg-center overflow-hidden relative bg-cover"
        style="background-image: url('{{ asset('img/dokumentasi/dokumentasi-7.jpg') }}');">
        <div class="text-center mx-auto mt-auto pb-10">
            <p class="text-4xl font-bold wow fadeInUp animated z-10 text-white mb-4">Programme</p>
            <p class="lg:w-1/2 text-white  wow fadeInUp animated mx-auto">The annual congress of the Pacific Association
                of Quantity
                Surveyors
                (PAQS) is
                a premier event that
                brings together professionals, academics, and industry leaders in the field of quantity surveying
                from across the Asia and Western Pacific region. This congress serves as a platform for sharing
                knowledge, discussing advancements, and fostering collaboration among member countries.</p>
        </div>
        <div class="absolute w-full h-full bg-black opacity-75">

        </div>
        {{-- <img src="{{ asset('img/meeting.jpg') }}" class="absolute w-full h-full object-cover brightness-[0.2]"> --}}
    </div>
    <div class="mt-20 md:mt-[15rem] min-h-screen md:mb-56 px-2 md:px-80">
        <div class="container">

            {{-- Main Program --}}
            <div class="mb-20 md:mb-40">
                <p class="font-semibold text-2xl text-black mb-4">Main Program</p>
                <div class="flex flex-wrap">


                    {{-- YOUNG QS --}}
                    <div class="w-full md:w-1/2 lg:w-1/4 p-3 h-auto drop-shadow-lg">
                        <button
                            class=" bg-neutral-50 p-4 hover:shadow-lg hover:bg-warna-01 group rounded-lg overflow-hidden text-left h-full flex flex-row gap-4 items-center w-full relative"
                            type="button" data-toggle="modal" data-target="#young-qs-modal">
                            <img src="{{ asset('img/meeting.svg') }}" alt="main program"
                                class="w-12 h-12 object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                            <p
                                class="text-center font-bold text-warna-01 group-hover:text-neutral-50 group-hover:pl-2 duration-300 text-xl">
                                Young QS
                            </p>

                            @foreach ($main_programs['Young QS'] as $program)
                                @if ($program->image_preview != null)
                                    <img src="{{ asset('storage/' . $program->image_preview) }}" alt="main program"
                                        class="aspect-video absolute top-0 right-0 w-32 h-32 translate-x-full group-hover:translate-x-0 rounded-xl object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                                @endif
                            @endforeach
                        </button>
                    </div>

                    {{-- PAQS Meeting --}}
                    <div class="w-full md:w-1/2 lg:w-1/4 p-3 h-auto drop-shadow-lg">
                        <button
                            class=" bg-neutral-50 p-4 hover:shadow-lg hover:bg-warna-01 group rounded-lg overflow-hidden text-left h-full flex flex-row gap-4 items-center w-full relative"
                            type="button" data-toggle="modal" data-target="#paqs-meeting-modal">
                            <img src="{{ asset('img/conversation.svg') }}" alt="main program"
                                class="w-12 h-12 object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                            <p
                                class="text-center font-bold text-warna-01 group-hover:text-neutral-50 group-hover:pl-2 duration-300 text-xl">
                                PAQS Meeting
                            </p>
                            @foreach ($main_programs['PAQS Meeting'] as $program)
                                @if ($program->image_preview != null)
                                    <img src="{{ asset('storage/' . $program->image_preview) }}" alt="main program"
                                        class="aspect-video absolute top-0 right-0 w-32 h-32 translate-x-full group-hover:translate-x-0 rounded-xl object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                                @endif
                            @endforeach
                        </button>
                    </div>

                    {{-- Call for Papers --}}
                    <div class="w-full md:w-1/2 lg:w-1/4 p-3 h-auto drop-shadow-lg">
                        <button
                            class=" bg-neutral-50 p-4 hover:shadow-lg hover:bg-warna-01 group rounded-lg overflow-hidden text-left h-full flex flex-row gap-4 items-center w-full relative"
                            type="button" data-toggle="modal" data-target="#call-for-papers-modal">
                            <img src="{{ asset('img/essay.svg') }}" alt="main program"
                                class="w-12 h-12 object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                            <p
                                class="text-center font-bold text-warna-01 group-hover:text-neutral-50 group-hover:pl-2 duration-300 text-xl">
                                Call for Papers
                            </p>
                            @foreach ($main_programs['Call for Papers'] as $program)
                                @if ($program->image_preview != null)
                                    <img src="{{ asset('storage/' . $program->image_preview) }}" alt="main program"
                                        class="aspect-video absolute top-0 right-0 w-32 h-32 translate-x-full group-hover:translate-x-0 rounded-xl object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                                @endif
                            @endforeach
                        </button>
                    </div>

                    {{-- Plenary Session --}}
                    <div class="w-full md:w-1/2 lg:w-1/4 p-3 h-auto drop-shadow-lg">
                        <button
                            class=" bg-neutral-50 p-4 hover:shadow-lg hover:bg-warna-01 group rounded-lg overflow-hidden text-left h-full flex flex-row gap-4 items-center w-full relative"
                            type="button" data-toggle="modal" data-target="#plenary-session-modal">
                            <img src="{{ asset('img/conference.svg') }}" alt="main program"
                                class="w-12 h-12 object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                            <p
                                class="text-center font-bold text-warna-01 group-hover:text-neutral-50 group-hover:pl-2 duration-300 text-xl">
                                Plenary Session
                            </p>
                            @foreach ($main_programs['Plenary Session'] as $program)
                                @if ($program->image_preview != null)
                                    <img src="{{ asset('storage/' . $program->image_preview) }}" alt="main program"
                                        class="aspect-video absolute top-0 right-0 w-32 h-32 translate-x-full group-hover:translate-x-0 rounded-xl object-cover group-hover:rotate-6 group-hover:scale-105 duration-300">
                                @endif
                            @endforeach
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Main Program -->
            <div class="modal fade" id="young-qs-modal" tabindex="-1" aria-labelledby="young-qs-modal"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable max-w-[1024px]">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-lg font-bold text-warna-01" id="exampleModalLabel">Young QS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="flex flex-col gap-4">
                                <span>The Young QS Program is designed to support and develop young
                                    professionals in the field of
                                    Quantity Surveying. Its main activities are:</span>
                                <ul class="mb-2 list-disc pl-5">
                                    <li class="list-disc">Seminars and Workshops</li>
                                    <li class="list-disc">Essay and Research Competitions</li>
                                    <li class="list-disc">Networking and meetings</li>
                                </ul>
                                <x-swiper-gallery :programs="$main_programs['Young QS']" />
                                <span class="block text-center text-sm mt-6 text-red-500">The itinerary below
                                    is
                                    tentative and subject to
                                    change</span>
                                @include('frontend.components.itinerary_yqs')
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="px-3 py-2 rounded bg-warna-01 text-white md:mx-auto font-bold text-lg w-full md:w-min"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="paqs-meeting-modal" tabindex="-1" aria-labelledby="paqs-meeting-modal"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable max-w-[1024px]">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-lg font-bold text-warna-01" id="exampleModalLabel">PAQS Meeting</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="flex flex-col gap-4">
                                <span>Internal meetings among PAQS member countries consist of:</span>
                                <ul class="mt-2 list-disc pl-5">
                                    <li class="list-disc">Committee meetings (Education, Digitalization,
                                        Research, and
                                        Sustainability)</li>
                                    <li class="list-disc">Member leadership meetings (Board Meetings) to
                                        discuss
                                        the developments
                                        in each member
                                        country
                                    </li>
                                </ul>
                                <x-swiper-gallery :programs="$main_programs['PAQS Meeting']" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="px-3 py-2 rounded bg-warna-01 text-white md:mx-auto font-bold text-lg w-full md:w-min"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="call-for-papers-modal" tabindex="-1"
                aria-labelledby="call-for-papers-modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable max-w-[1024px]">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-lg font-bold text-warna-01" id="exampleModalLabel">Call for Papers</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="flex flex-col gap-4">
                                <span>The Papers Conference provides a valuable platform for professionals and
                                    academics to share
                                    knowledge, collaborate, and contribute to the advancement of a more
                                    progressive and sustainable
                                    construction industry, with participants from various countries.</span>
                                <x-swiper-gallery :programs="$main_programs['Call for Papers']" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="px-3 py-2 rounded bg-warna-01 text-white md:mx-auto font-bold text-lg w-full md:w-min"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="plenary-session-modal" tabindex="-1"
                aria-labelledby="plenary-session-modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable max-w-[1024px]">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-lg font-bold text-warna-01" id="exampleModalLabel">Plenary Session</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="flex flex-col gap-4">
                                <span>This session will discuss the main topics of the congress, including panel
                                    sessions and
                                    discussions, technical presentations, and research and innovation sessions
                                    from various
                                    countries
                                    that have participated in the Paper Conferences held over two days, open to
                                    the public and
                                    serving
                                    as a platform for networking to capture opportunities and
                                    collaboration.</span>
                                <x-swiper-gallery :programs="$main_programs['Plenary Session']" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                class="px-3 py-2 rounded bg-warna-01 text-white md:mx-auto font-bold text-lg w-full md:w-min"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Social Activity --}}
            <div class="mb-60">
                <p class="font-semibold text-2xl text-black mb-4">Social Activity Program</p>
                <div class="text-gray-500 flex flex-wrap justify-center">
                    @php $index = 1; @endphp
                    @foreach ($activities as $category => $activities)
                        @php
                            // Mapping kategori ke ID yang sesuai
                            $iconMap = [
                                'Project Visit' => 'icon-blueprint',
                                'Golf Tournament' => 'icon-golf',
                                'Spouse Program' => 'icon-calendar',
                                'Gala Dinner' => 'icon-dinner',
                                'Exhibition' => 'icon-exhibition',
                            ];
                            $iconId = $iconMap[$category] ?? 'icon-default';
                        @endphp

                        <div class="p-1 md:p-2 md:w-1/5 w-1/3">
                            <input type="radio" name="activity" id="activity-{{ $index }}"
                                class="hidden peer" data-images="{{ json_encode($activities->first()->image) }}"
                                data-videos="{{ json_encode($activities->first()->video) }}"
                                data-category="{{ $category }}"
                                {{ $category == 'Project Visit' ? 'checked' : '' }} />
                            <label for="activity-{{ $index }}"
                                class="rounded-xl block text-center bg-white shadow-lg p-2 group peer-checked:ring-2 peer-checked:ring-warna-temp-02 h-full">

                                <!-- Ikon Lottie -->
                                <div class="w-20 h-20 mx-auto opacity-50 group-hover:opacity-100 mb-4"
                                    id="{{ $iconId }}"></div>

                                <span class="font-bold text-lg group-hover:text-black">{{ $category }}</span>
                            </label>
                        </div>
                        @php $index++; @endphp
                    @endforeach
                </div>

                <!-- Tempat untuk menampilkan video & gambar -->
                <div id="activity_details" class="hidden bg-gray-100 rounded-lg mt-4">
                    <div id="activity_content" class="flex flex-wrap justify-center"></div>
                </div>
            </div>

            <!-- Modal Bootstrap -->
            <div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="text-lg font-bold text-warna-01" id="mediaModalLabel">Preview</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <div id="modal_media"></div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    let defaultChecked = false;

                    document.querySelectorAll("input[name='activity']").forEach(input => {
                        input.addEventListener("change", function() {
                            const images = JSON.parse(this.getAttribute("data-images"));
                            const videos = JSON.parse(this.getAttribute("data-videos"));
                            const category = this.getAttribute("data-category");

                            let contentHTML = "";

                            // Tambahkan video terlebih dahulu
                            videos.forEach(video => {
                                contentHTML += `
                    <div class="w-1/2 aspect-square lg:w-[16rem] lg:h-[16rem] p-2">
                        <div class="aspect-square rounded-lg shadow-lg overflow-hidden cursor-pointer"
                            onclick="openModal('video', '{{ asset('storage') }}/${video}')">
                            <video class="w-full h-full object-cover" muted>
                                <source src="{{ asset('storage') }}/${video}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                `;
                            });

                            // Tambahkan gambar setelah video
                            images.forEach(img => {
                                contentHTML += `
                    <div class="w-1/2 aspect-square lg:w-[16rem] lg:h-[16rem] p-2">
                        <img src="{{ asset('storage') }}/${img}" class="aspect-square object-cover rounded-lg shadow-lg cursor-pointer" onclick="openModal('image', '{{ asset('storage') }}/${img}')">
                    </div>
                `;
                            });

                            document.getElementById("activity_content").innerHTML = contentHTML;
                            document.getElementById("activity_details").classList.remove("hidden");
                        });

                        // Jika kategori adalah "Project Visit", tandai sebagai checked dan jalankan event change()
                        if (input.getAttribute("data-category") === "Project Visit" && !defaultChecked) {
                            input.checked = true;
                            input.dispatchEvent(new Event("change"));
                            defaultChecked = true; // Pastikan hanya satu input yang dijalankan
                        }
                    });
                });

                function openModal(type, src) {
                    let modalContent = "";
                    if (type === "video") {
                        modalContent = `
            <video controls autoplay class="w-100">
                <source src="${src}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        `;
                    } else {
                        modalContent = `<img src="${src}" class="w-100 rounded-lg shadow-lg">`;
                    }

                    document.getElementById("modal_media").innerHTML = modalContent;
                    $("#mediaModal").modal("show");
                }
            </script>





            {{-- Theme --}}
            <div class="mb-80 flex flex-wrap gap-24">
                <div class="flex-1 z-10">
                    <p class="font-semibold text-2xl text-warna-temp-02 mb-4">2025 Congress Theme </p>
                    <div class=" mb-2 relative">
                        <x-bxs-quote-right
                            class="w-12 h-12 text-warna-01 absolute top-0 left-0 translate-x-1/2 -translate-y-1/2" />
                        <div id="theme" class="text-4xl font-bold text-warna-01 p-4 rounded-[2rem]  ">
                            {{-- Materi teks ada di js typewritter --}}
                        </div>
                    </div>
                </div>

                <div class="flex-1 text-gray-400 flex flex-row gap-4 z-10 bg-cover relative">
                    <div class="flex flex-wrap md:flex-col flex-1 gap-6">
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">AI-Driven Construction Innovations:</span>
                            Leveraging
                            artificial
                            intelligence
                            for predictive analytics, automation, and enhanced decision-making
                        </div>
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">Pathways to Net Zero and
                                Decarbonization:</span>
                            Cutting-edge
                            approaches to reducing carbon
                            footprints in construction processes.
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 gap-6 mt-8">
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">Breakthroughs in Sustainable Materials:</span>
                            Next-generation
                            materials that drive both
                            innovation and environmental responsibility. Modular and Prefabricated
                        </div>
                        <div class="bg-white rounded-lg p-2 shadow-lg text-lg">
                            <span class="font-bold text-warna-01">Construction: </span>Revolutionizing building
                            techniques
                            for
                            speed,
                            efficiency, and
                            sustainability.
                        </div>
                    </div>

                    <img src="{{ asset('img/abstract-shape.png') }}"
                        class="w-1/2 absolute left-0 translate-x-1/2 -z-10 scale-125">
                </div>

                {{-- <img src="{{ asset('img/grid-3.png') }}" class="w-screen absolute left-0 z-10"> --}}
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
