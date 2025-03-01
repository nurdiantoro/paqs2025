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
            <div class="mb-20 md:mb-80 flex flex-wrap-reverse">
                <div
                    class="w-full md:w-1/2 md:translate-y-0 translate-y-[-50%] absolute bottom-0 md:relative hidden md:block ">
                    <img src="{{ asset('img/programme.png') }}" class="scale-150">
                </div>
                <div class="w-full md:w-1/2 ">
                    <p class="font-semibold text-2xl text-black mb-4">Main Program</p>
                    <div class="text-gray-400 flex-col">

                        <!-- Accordion 1 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-1" class="peer hidden" />
                                <label for="accordion-1"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">Young QS</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-min transition-all duration-1000">
                                    <div class="px-3 pb-3">
                                        <span>The Young QS Program is designed to support and develop young
                                            professionals in the field of
                                            Quantity Surveying. Its main activities are:</span>
                                        <ul class="mb-2 list-disc pl-5">
                                            <li class="list-disc">Seminars and Workshops</li>
                                            <li class="list-disc">Essay and Research Competitions</li>
                                            <li class="list-disc">Networking and meetings</li>
                                        </ul>


                                        <span class="block text-center text-sm mt-6 text-red-500">The itinerary below is
                                            tentative and subject to
                                            change</span>
                                        @include('frontend.components.itinerary_yqs')
                                        @include('frontend.components.swipper_yqs')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 2 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-2" class="peer hidden" />
                                <label for="accordion-2"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">PAQS Meeting</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 ease-in-out">
                                    <div class="px-3 pb-3">
                                        <span>Internal meetings among PAQS member countries consist of:</span>
                                        <ul class="mt-2 list-disc pl-5">
                                            <li class="list-disc">Committee meetings (Education, Digitalization,
                                                Research, and
                                                Sustainability)</li>
                                            <li class="list-disc">Member leadership meetings (Board Meetings) to discuss
                                                the developments
                                                in each member
                                                country
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 3 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-3" class="peer hidden" />
                                <label for="accordion-3"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">Call for Papers</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 ease-in-out">
                                    <div class="px-3 pb-3">
                                        <span>The Papers Conference provides a valuable platform for professionals and
                                            academics to share
                                            knowledge, collaborate, and contribute to the advancement of a more
                                            progressive and sustainable
                                            construction industry, with participants from various countries.</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 4 -->
                        <div class="mb-4">
                            <div class="bg-white flex flex-col shadow-xl rounded-xl relative">
                                <input type="radio" name="accordion" id="accordion-4" class="peer hidden" />
                                <label for="accordion-4"
                                    class="mb-0 flex justify-between items-center cursor-pointer p-3 flex-row z-20">
                                    <span class="font-bold text-warna-01">Plenary Session</span>
                                </label>
                                <x-fas-plus
                                    class="h-4 w-4 opacity-100 peer-checked:opacity-0 peer-checked:rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <x-fas-minus
                                    class="h-4 w-4 opacity-0 peer-checked:opacity-100 peer-checked:rotate-0 -rotate-90 duration-500 absolute right-4 top-4 z-10" />
                                <div
                                    class="max-h-0 overflow-hidden peer-checked:max-h-96 transition-all duration-500 ease-in-out">
                                    <div class="px-3 pb-3">
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
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Social Activity --}}
            <div class="mb-60">
                <p class="font-semibold text-2xl text-black mb-4">Social Activity Program</p>
                <div class="text-gray-500 flex flex-wrap justify-center">
                    @php $index = 1; @endphp
                    @foreach ($programs as $category => $activities)
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
                            <input type="radio" name="activity" id="activity-{{ $index }}" class="hidden peer"
                                data-images="{{ json_encode($activities->first()->image) }}"
                                data-videos="{{ json_encode($activities->first()->video) }}"
                                data-category="{{ $category }}" />
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
                <div id="activity_details" class="hidden p-4 bg-gray-100 rounded-lg mt-4">
                    <div id="activity_content" class="flex flex-wrap justify-center"></div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelectorAll("input[name='activity']").forEach(input => {
                        input.addEventListener("change", function() {
                            const images = JSON.parse(this.getAttribute("data-images"));
                            const videos = JSON.parse(this.getAttribute("data-videos"));
                            const category = this.getAttribute("data-category");

                            let contentHTML = "";

                            // Tambahkan video terlebih dahulu
                            videos.forEach(video => {
                                contentHTML += `
                        <video controls class="w-64 lg:w-[20rem] rounded-lg shadow-lg m-2">
                            <source src="{{ asset('storage') }}/${video}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    `;
                            });

                            // Tambahkan gambar setelah video
                            images.forEach(img => {
                                contentHTML += `
                        <img src="{{ asset('storage') }}/${img}" class="w-32 h-32 lg:w-[16rem] lg:h-[16rem] object-cover rounded-lg shadow-lg m-2">
                    `;
                            });

                            document.getElementById("activity_content").innerHTML = contentHTML;
                            document.getElementById("activity_details").classList.remove("hidden");
                        });
                    });
                });
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
