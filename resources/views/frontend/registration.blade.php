@include('frontend.components.header')
@include('frontend.components.navbar')
<main>
    <section pt-113 pb-90 fix min-h-screen" style="">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="flex flex-col text-center mt-40 mb-20">
                    <span class="wow fadeInUp animated text-3xl font-semibold" data-animation="fadeInUp animated"
                        data-delay=".2s">
                        Registration Plans
                    </span>
                    <span class="wow fadeInUp animated font-bold text-6xl text-slate-900"
                        data-animation="fadeInUp animated" data-delay=".4s">
                        PAQS Congress 2025
                    </span>
                </div>
            </div>
        </div>

        <div class="mb-10 p-2">
            <div class="text-center text-4xl font-semibold text-warna-temp-02 mb-4 wow fadeInUp animated">Guide to
                Register
                Paqs 2025 </div>

            <iframe src="https://www.youtube.com/embed/HE9MGjqQYas?si=j4LPaCrBq974h4te"
                title="Guide to Register Paqs 2025" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                class="mx-auto rounded-xl w-full aspect-video lg:w-1/3"></iframe>
        </div>

        <div class="container">
            @foreach ($datas as $type => $items)
                <span class="text-4xl font-bold text-black block mb-4">{{ $type }}</span>
                <div class="flex flex-wrap mb-32">
                    @foreach ($items as $item)
                        <div class="w-full md:w-1/4 p-2 h-auto">
                            <a href="{{ url('registration/form') }}">
                                <div class="h-full p-4 rounded-xl flex flex-col bg-cover border-[1px] border-slate-100  hover:shadow-lg hover:border-slate-300"
                                    style="background-image: url('{{ asset('img/glass.png') }}')">
                                    <div class="font-bold text-warna-01 mx-auto mb-12">
                                        <span class="">{{ $item->currency }}</span>
                                        <span class="text-5xl">
                                            <?php
                                            if ($item->price > 1000) {
                                                echo number_format(floor($item->price / 1000)) . '</span><span class="align-super">,000</span>';
                                            } else {
                                                echo number_format($item->price) . '</span>';
                                            }
                                            ?>
                                    </div>
                                    <span
                                        class="text-lg text-slate-900 text-center mb-auto font-semibold">{{ $item->name }}</span>
                                    <div class="text-center mt-4">
                                        <span class=" text-slate-700 py-3 px-4 rounded-lg">Register
                                            now!</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
</main>
@include('frontend.components.footer')
