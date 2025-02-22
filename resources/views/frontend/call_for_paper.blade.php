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
    <div class="mt-200 min-h-screen mb-50 px-2 md:px-80 container flex flex-wrap">

        <div class="flex justify-center w-full lg:w-1/2 p-4">
            <img src="{{ asset('img/call_for_paper_2.jpeg') }}" alt="call for paper" class="rounded-xl">
        </div>

        <div class="flex flex-col justify-center items-center w-full lg:w-1/2 p-4">
            <div class="rounded-xl bg-white shadow-xl p-8 border w-full">
                <span class="text-xl mb-2 font-semibold inline-block">Please read carefully before formatting and
                    submitting your
                    paper!</span>
                <table class="mb-8">
                    <tr>
                        <td class="border-none p-2 align-top"><x-ionicon-document-text-outline
                                class="w-6 h-6 inline mr-2" />
                        </td>
                        <td class="border-none p-2 align-top">Please follow the Template and use the file name
                            format:
                            PAQS2025_Poster/Fullpaper_Track
                            Name_First Author</td>
                    </tr>
                    <tr>
                        <td class="border-none p-2 align-top"><x-ionicon-document-text-outline
                                class="w-6 h-6 inline mr-2" />
                        </td>
                        <td class="border-none p-2 align-top">If you are going to submit your full paper, please
                            follow
                            the
                            Fullpaper Template</td>
                    </tr>
                    <tr>
                        <td class="border-none p-2 align-top"><x-ionicon-document-text-outline
                                class="w-6 h-6 inline mr-2" />
                        </td>
                        <td class="border-none p-2 align-top">If you are going to submit your Poster, please follow
                            the
                            Poster
                            Template</td>
                    </tr>
                    <tr>
                        <td class="border-none p-2 align-top"><x-ionicon-document-text-outline
                                class="w-6 h-6 inline mr-2" />
                        </td>
                        <td class="border-none p-2 align-top">Please write the paper title in the submit-manuscript
                            platform with
                            the format:
                            POSTER/FULL PAPER_TITLE</td>
                    </tr>
                    <tr>
                        <td class="border-none p-2 align-top"><x-ionicon-document-text-outline
                                class="w-6 h-6 inline mr-2" />
                        </td>
                        <td class="border-none p-2 align-top">Please upload the file in PDF format</td>
                    </tr>
                </table>

                <a href="{{ asset('documents/Fullpaper_Template_PAQS_Congress_2025.docx') }}" download=""
                    class="text-white bg-warna-temp-02 px-6 py-3 rounded-full hover:shadow-md">Download
                    Paper Template</a>
                <a href="http://bit.ly/Submission-PAQS2025" target="_blank"
                    class="text-warna-temp-02   hover:text-white hover:bg-warna-temp-02 px-6 py-3 rounded-full hover:shadow-md">Submit
                    Paper</a>
            </div>
        </div>

    </div>

    {{-- Timeline --}}
    <div class="container ">
        <span class="text-2xl mb-2 font-semibold block text-black text-center">Speakers Profile</span>
        <div class="flex flex-wrap flex-col md:flex-row">
            @foreach ($speakers as $speaker)
                <div class="p-2 w-full md:w-1/2">
                    <div class="bg-white rounded-xl border p-2">
                        <img src="{{ asset('storage/' . $speaker->image) }}"
                            class="ratio-1x1 rounded-full w-[100px] mx-auto">
                        <span class="text-2xl mb-2 font-bold inline-block text-slate-900">{{ $speaker->name }}</span>
                        <p class="line-clamp-3 text-justify text-gray-500">{!! $speaker->description !!}</p>
                        {{-- <span class="text-justify inline-block">{!! $speaker->description !!}</span> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container my-40">
        <div class="row">
            <div class="col-lg-12 ">
                <nav class="wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active show" id="day-one" data-toggle="tab" href="#one"
                            role="tab" aria-selected="true">
                            <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                            <div class="nav-content">
                                <strong>22<sup>nd</sup></strong>
                                <span>August 2025</span>
                            </div>
                        </a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#two"
                            role="tab" aria-selected="false">
                            <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                            <div class="nav-content">
                                <strong>23<sup>th</sup></strong>
                                <span>August 2025</span>
                            </div>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#three"
                            role="tab" aria-selected="false">
                            <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                            <div class="nav-content">
                                <strong>24<sup>th</sup></strong>
                                <span>August 2025</span>
                            </div>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#four"
                            role="tab" aria-selected="false">
                            <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                            <div class="nav-content">
                                <strong>25<sup>th</sup></strong>
                                <span>August 2025</span>
                            </div>
                        </a>
                        <a class="nav-item nav-link" id="nav-contact-tab3" data-toggle="tab" href="#four"
                            role="tab" aria-selected="false">
                            <x-heroicon-o-calendar-date-range class="drk-icon w-12 h-12 text-warna-01" />
                            <div class="nav-content">
                                <strong>26<sup>th</sup></strong>
                                <span>August 2025</span>
                            </div>
                        </a>
                    </div>
                </nav>


                <div class="tab-content py-3 px-3 px-sm-0 wow fadeInDown animated" data-animation="fadeInDown animated"
                    data-delay=".2s" id="nav-tabContent">


                    <div class="tab-pane fade active show relative" id="one" role="tabpanel"
                        aria-labelledby="day-one">
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />08.00AM
                                - 09.00AM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Young
                                QS Programme</span>
                        </div>
                    </div>

                    <div class="tab-pane fade relative" id="two" role="tabpanel" aria-labelledby="day-one">
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />09.00AM
                                - 11.00AM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Education
                                & Accreditation Committee Meeting</span>
                        </div>
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />11.00AM
                                - 01.00PM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Research
                                Committe Meeting</span>
                        </div>
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />01.00PM
                                - 03.00PM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Sustainability
                                Committee Meeting</span>
                        </div>
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />03.00PM
                                - 05.00PM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">BIM
                                Committee Meeting</span>
                        </div>
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />06.30AM
                                - 1.00PM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Golf
                                Tournament</span>
                        </div>
                    </div>

                    <div class="tab-pane fade relative" id="three" role="tabpanel" aria-labelledby="day-one">
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />08.30AM
                                - 09.00AM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Registration</span>
                        </div>
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />09.00AM
                                - 05.00PM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">Board
                                Meeting Session</span>
                        </div>
                        <div class="relative w-full text-center h-24">
                            <div
                                class="before:contents[''] before:w-[1px] before:h-full before:bg-slate-400 before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 w-full after:contents[''] after:w-4 after:h-4 after:bg-slate-100 after:border-2 after:border-slate-400 after:shadow-md after:absolute after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-full">
                            </div>
                            <span class=" absolute top-1/2 right-1/2 -translate-y-1/2 mr-12 "><x-heroicon-s-clock
                                    class="w-6 h-6 inline mr-2" />07.00AM
                                - 09.00PM</span>
                            <span
                                class="bg-white shadow-lg p-3 rounded-lg absolute top-1/2 left-1/2 -translate-y-1/2 ml-12 ">President
                                Dinner</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 justify-content-center text-center">
                <a href="#" class="btn mt-20">Download Programme <x-gmdi-download-r
                        class="w-8 h-8 inline" /></a>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
