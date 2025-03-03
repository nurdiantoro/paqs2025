@include('frontend.components.header')
@include('frontend.components.navbar')



<!-- main-area -->
<main>
    <div class="flex flex-col px-2 md:px-80 items-center bg-center overflow-hidden relative bg-cover"
        style="background-image: url('{{ asset('img/dokumentasi/dokumentasi-7.jpg') }}');">
        <div class="text-center mx-auto pb-10 pt-40">
            <p class="text-4xl font-bold wow fadeInUp animated z-10 text-white mb-4">About Us</p>
            <p class="lg:w-1/2 text-white  wow fadeInUp animated mx-auto">
                PAQS Annual Congress: The Premier Gathering for Quantity Surveying Professionals
                <br>
                <br>
                The Pacific Association of Quantity Surveyors (PAQS) Annual Congress is the most anticipated event for
                Quantity Surveying professionals, academics, and industry leaders across Asia and the Western Pacific.
                This prestigious gathering provides a dynamic platform for sharing cutting-edge knowledge, discussing
                industry advancements, and strengthening collaboration among member countries.
                <br>
                <br>
                Each year, the congress features a diverse program, including keynote speeches from global experts,
                technical sessions on emerging trends, panel discussions on industry challenges, and networking
                opportunities that foster international partnerships. Participants gain valuable insights into the
                latest innovations, best practices, and research shaping the future of Quantity Surveying and the built
                environment.
                <br>
                <br>
                Beyond professional development, the PAQS Congress also offers a unique cultural experience, allowing
                delegates to explore the host country’s heritage, industry landscape, and hospitality. Whether you are
                an experienced practitioner or a young professional, this congress is an invaluable opportunity to
                connect, learn, and contribute to the continuous evolution of the Quantity Surveying profession.
            </p>
        </div>
        <div class="absolute w-full h-full bg-black opacity-75">

        </div>
    </div>

    <div class="min-h-screen mb-50 max-w-[100rem] mx-auto md:mt-[10rem] ">
        <div class="mb-60 px-2 md:px-0">
            <div class="mb-40 flex flex-col lg:flex-row justify-between items-center">
                <div
                    class="w-full lg:w-1/2 flex justify-center items-center wow fadeInUp animated lg:pr-20 lg:mb-0 mb-12">
                    <img src="{{ asset('img/53951347333_17a4bf21f5_o.jpg') }}"
                        class="w-[400px] rounded-xl hover:scale-110 duration-300 ease-out drop-shadow-lg">
                </div>

                <div class="w-full
                        lg:w-1/2">
                    <p class="wow fadeInUp animated text-justify text-slate-500">
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
                <ul class="wow fadeInUp animated flex flex-col md:flex-row gap-4">
                    <li class="bg-white rounded-xl md:w-1/5 w-full p-4 text-slate-500">
                        Enhancing the standards of professionalism
                        in the
                        Quantity Surveying
                        profession in the Asia
                        and Western Pacific region.</li>
                    <li class="bg-white rounded-xl md:w-1/5 w-full p-4 text-slate-500">Encouraging collaboration and
                        knowledge
                        exchange among
                        Quantity
                        Surveying professionals from
                        various countries</li>
                    <li class="bg-white rounded-xl md:w-1/5 w-full p-4 text-slate-500">Promoting innovation in
                        technology and
                        environmentally
                        friendly
                        practices in the construction
                        industry</li>
                    <li class="bg-white rounded-xl md:w-1/5 w-full p-4 text-slate-500">Improving education and training
                        for
                        Quantity Surveyors,
                        including
                        the accreditation of
                        related educational programs</li>
                    <li class="bg-white rounded-xl md:w-1/5 w-full p-4 text-slate-500">Discussing and promoting
                        digitalization in
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
                <ul class="wow fadeInUp animated flex flex-wrap">
                    <li class="w-1/2 md:w-1/6 p-2 h-auto">
                        <div class="text-slate-500 h-full flex flex-col gap-2 p-4 bg-white rounded-xl group">
                            <x-solar-suitcase-bold-duotone
                                class="w-10 h-10 text-warna-01 opacity-50 group-hover:opacity-100" />
                            Professional QS
                        </div>
                    </li>
                    <li class="w-1/2 md:w-1/6 p-2 h-auto">
                        <div class="text-slate-500 h-full flex flex-col gap-2 p-4 bg-white rounded-xl group">
                            <x-solar-delivery-bold-duotone
                                class="w-10 h-10 text-warna-01 opacity-50 group-hover:opacity-100" />
                            Suppliers
                        </div>
                    </li>
                    <li class="w-1/2 md:w-1/6 p-2 h-auto">
                        <div class="text-slate-500 h-full flex flex-col gap-2 p-4 bg-white rounded-xl group">
                            <x-solar-buildings-bold-duotone
                                class="w-10 h-10 text-warna-01 opacity-50 group-hover:opacity-100" />
                            Developer & Property
                        </div>
                    </li>
                    <li class="w-1/2 md:w-1/6 p-2 h-auto">
                        <div class="text-slate-500 h-full flex flex-col gap-2 p-4 bg-white rounded-xl group">
                            <x-fas-tools class="w-10 h-10 text-warna-01 opacity-50 group-hover:opacity-100" />
                            Consultant Engineering & Architect
                        </div>
                    </li>
                    <li class="w-1/2 md:w-1/6 p-2 h-auto">
                        <div class="text-slate-500 h-full flex flex-col gap-2 p-4 bg-white rounded-xl group">
                            <x-solar-square-academic-cap-bold-duotone
                                class="w-10 h-10 text-warna-01 opacity-50 group-hover:opacity-100" />
                            Academicians & Researcher
                        </div>
                    </li>
                    <li class="w-1/2 md:w-1/6 p-2 h-auto">
                        <div class="text-slate-500 h-full flex flex-col gap-2 p-4 bg-white rounded-xl group">
                            <x-letsicon-form-duotone
                                class="w-10 h-10 text-warna-01 opacity-50 group-hover:opacity-100" />
                            Government & Regulatory
                        </div>
                    </li>
                </ul>
            </div>

            <div class="mb-40 flex flex-row gap-20">
                <div class="md:basis-2/3">
                    <h5 class="wow fadeInUp animated text-2xl font-semibold mb-4" data-animation="fadeInUp animated"
                        data-delay=".2s">
                        Overview of Indonesia’s Quantity Surveyor</h5>
                    <p class="wow fadeInUp animated text-justify text-slate-500">The Quantity Surveyor (QS) profession
                        in Indonesia
                        faces several
                        major
                        challenges that affect their
                        effectiveness and development in the construction industry. Primarily, there is a lack of
                        education
                        and certification, with formal education programs and specialized training for QS still limited,
                        resulting in many QS professionals not having internationally recognized certifications.
                        Additionally, differences in understanding contracts among parties involved in construction
                        projects
                        often lead to conflicts and ambiguities in project execution. Although digitalization is a
                        global
                        trend, the adoption of digital technology in Indonesia’s construction industry is still
                        relatively
                        slow, necessitating QS professionals to master new technologies to improve their work efficiency
                        and
                        accuracy. The availability of skilled and experienced QS labor also remains a challenge,
                        especially
                        in handling large and complex projects. The lack of clear and uniform national contract
                        standards
                        makes project management processes more complicated and prone to errors. Lastly, promoting
                        environmentally friendly practices and sustainability in construction projects remains a
                        challenge,
                        particularly in terms of cost and the implementation of green technologies. Addressing these
                        challenges requires collaborative efforts between the government, educational institutions, and
                        the
                        construction industry to enhance the quality and professionalism of QS in Indonesia.
                        <br><br>
                        The role of the Indonesian Association of Quantity Surveyors (IQSI) is crucial in addressing
                        these
                        challenges. IQSI can play a significant role in enhancing QS education and certification through
                        internationally recognized training and accreditation programs, especially in PAQS (Pacific
                        Association of Quantity Surveyors) member countries
                    </p>
                </div>
                <div class="md:basis-1/3 hidden md:flex justify-content-center items-center">
                    <img src="{{ asset('img/kontruksi.png') }}" class="w-100">
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
