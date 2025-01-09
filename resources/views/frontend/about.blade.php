@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="mt-200 min-h-screen mb-50 px-80">
        <div class="mb-60">
            <div class="mb-40 flex flex-wrap justify-between">
                <div class="flex-1 flex justify-center items-center wow fadeInUp animated">
                    <img src="{{ asset('img/forum.jpg') }}" class="w-[400px] rounded-xl">
                </div>
                <div class="flex-1">
                    <p class="text-4xl font-bold text-black wow fadeInUp animated">About Us</p>
                    <p class="wow fadeInUp animated text-justify text-slate-500">The annual congress of the Pacific
                        Association of Quantity Surveyors
                        (PAQS) is a premier event that brings together professionals, academics, and industry leaders in
                        the
                        field of quantity surveying from across the Asia and Western Pacific region. This congress
                        serves as
                        a platform for sharing knowledge, discussing advancements, and fostering collaboration among
                        member
                        countries.
                        <br><br>
                        Each year, the congress features a series of keynote speeches, panel discussions, and technical
                        sessions covering a wide range of topics, including construction practices, digitalization in
                        quantity surveying, and innovative project management techniques.
                        <br><br>
                        The event also provides numerous networking opportunities, allowing participants to connect with
                        peers, exchange ideas, and explore potential partnerships. The PAQS Congress is not only an
                        important opportunity for professional development but also a celebration of the achievements
                        and
                        contributions of Quantity Surveyors in shaping the built environment.
                    </p>
                </div>
            </div>
            <div class="mb-40">
                <h5 class="wow fadeInUp animated text-2xl font-semibold mb-8" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    Congress Goals</h5>
                <ul class="wow fadeInUp animated flex flex-wrap gap-4">
                    <li class="bg-white rounded-xl flex-1 p-4 text-slate-500">
                        Enhancing the standards of professionalism
                        in the
                        Quantity Surveying
                        profession in the Asia
                        and Western Pacific region.</li>
                    <li class="bg-white rounded-xl flex-1 p-4 text-slate-500">Encouraging collaboration and knowledge
                        exchange among
                        Quantity
                        Surveying professionals from
                        various countries</li>
                    <li class="bg-white rounded-xl flex-1 p-4 text-slate-500">Promoting innovation in technology and
                        environmentally
                        friendly
                        practices in the construction
                        industry</li>
                    <li class="bg-white rounded-xl flex-1 p-4 text-slate-500">Improving education and training for
                        Quantity Surveyors,
                        including
                        the accreditation of
                        related educational programs</li>
                    <li class="bg-white rounded-xl flex-1 p-4 text-slate-500">Discussing and promoting digitalization in
                        the
                        construction industry
                        towards the development
                        of smart cities and nations</li>
                </ul>
            </div>
            <div class="mb-40">
                <h5 class="wow fadeInUp animated text-2xl font-semibold mb-4" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    Target Audience</h5>
                <ul class="wow fadeInUp animated flex flex-wrap gap-4">
                    <li class="flex-1 p-4 text-slate-500 flex flex-col gap-2 bg-white rounded-xl">
                        <x-solar-suitcase-bold-duotone class="w-10 h-10 text-warna-temp-02" />
                        Professional QS
                    </li>
                    <li class="flex-1 p-4 text-slate-500 flex flex-col gap-2 bg-white rounded-xl">
                        <x-solar-delivery-bold-duotone class="w-10 h-10 text-warna-temp-02" />
                        Suppliers
                    </li>
                    <li class="flex-1 p-4 text-slate-500 flex flex-col gap-2 bg-white rounded-xl">
                        <x-solar-buildings-bold-duotone class="w-10 h-10 text-warna-temp-02" />
                        Developer & Property
                    </li>
                    <li class="flex-1 p-4 text-slate-500 flex flex-col gap-2 bg-white rounded-xl">
                        <x-fas-tools class="w-10 h-10 text-warna-temp-02" />
                        Consultant Engineering & Architect
                    </li>
                    <li class="flex-1 p-4 text-slate-500 flex flex-col gap-2 bg-white rounded-xl">
                        <x-solar-square-academic-cap-bold-duotone class="w-10 h-10 text-warna-temp-02" />
                        Academicians & Researcher
                    </li>
                    <li class="flex-1 p-4 text-slate-500 flex flex-col gap-2 bg-white rounded-xl">
                        <x-letsicon-form-duotone class="w-10 h-10 text-warna-temp-02" />
                        Government & Regulatory
                    </li>
                </ul>
            </div>
            <div class="mb-40">
                <h5 class="wow fadeInUp animated text-2xl font-semibold" data-animation="fadeInUp animated"
                    data-delay=".2s">
                    Overview of Indonesia’s Quantity Surveyor</h5>
                <p class="wow fadeInUp animated">The Quantity Surveyor (QS) profession in Indonesia faces several major
                    challenges that affect their
                    effectiveness and development in the construction industry. Primarily, there is a lack of education
                    and certification, with formal education programs and specialized training for QS still limited,
                    resulting in many QS professionals not having internationally recognized certifications.
                    Additionally, differences in understanding contracts among parties involved in construction projects
                    often lead to conflicts and ambiguities in project execution. Although digitalization is a global
                    trend, the adoption of digital technology in Indonesia’s construction industry is still relatively
                    slow, necessitating QS professionals to master new technologies to improve their work efficiency and
                    accuracy. The availability of skilled and experienced QS labor also remains a challenge, especially
                    in handling large and complex projects. The lack of clear and uniform national contract standards
                    makes project management processes more complicated and prone to errors. Lastly, promoting
                    environmentally friendly practices and sustainability in construction projects remains a challenge,
                    particularly in terms of cost and the implementation of green technologies. Addressing these
                    challenges requires collaborative efforts between the government, educational institutions, and the
                    construction industry to enhance the quality and professionalism of QS in Indonesia.
                    <br><br>
                    The role of the Indonesian Association of Quantity Surveyors (IQSI) is crucial in addressing these
                    challenges. IQSI can play a significant role in enhancing QS education and certification through
                    internationally recognized training and accreditation programs, especially in PAQS (Pacific
                    Association of Quantity Surveyors) member countries
                </p>
            </div>
        </div>

        {{-- <div class="mb-60">
            <span></span>
            <div class="row items-start">
                <div class="col-md-4 mb-4 wow fadeInDown md:px-12 animated flex flex-row items-start"
                    data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="bg-sky-100 p-2 rounded-xl mr-2">
                        <x-hugeicons-promotion class="w-10 h-10 text-sky-800" />
                    </div>
                    <div class="content">
                        <p class="text-sky-950">The promotion of the practice of Quantity Surveying (QS) in the
                            region.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInDown md:px-12 animated flex flex-row items-start"
                    data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="bg-sky-100 p-2 rounded-xl mr-2">
                        <x-bx-world class="w-10 h-10 text-sky-800" />
                    </div>
                    <div class="content">
                        <p class="text-sky-950">The promotion of “best practice” for QS in the region.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInDown md:px-12 animated flex flex-row items-start"
                    data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="bg-sky-100 p-2 rounded-xl mr-2">
                        <x-bi-building-fill class="w-10 h-10 text-sky-800" />
                    </div>
                    <div class="content">
                        <p class="text-sky-950">Fostering of research appropriate to the better understanding of
                            building practice in the region.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInDown md:px-12 animated flex flex-row items-start"
                    data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="bg-sky-100 p-2 rounded-xl mr-2">
                        <x-iconpark-goodone class="w-10 h-10 text-sky-800" />
                    </div>
                    <div class="content">
                        <p class="text-sky-950">Encouragement of regional cooperation in the practice of QS.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInDown md:px-12 animated flex flex-row items-start"
                    data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="bg-sky-100 p-2 rounded-xl mr-2">
                        <x-codicon-organization class="w-10 h-10 text-sky-800" />
                    </div>
                    <div class="content">
                        <p class="text-sky-950">The promotion of dialogue between member organisations.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 wow fadeInDown md:px-12 animated flex flex-row items-start"
                    data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="bg-sky-100 p-2 rounded-xl mr-2">
                        <x-hugeicons-idea-01 class="w-10 h-10 text-sky-800" />
                    </div>
                    <div class="content">
                        <p class="text-sky-950">Rendering assistance to members of member organisations working in
                            each other’s countries.</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
