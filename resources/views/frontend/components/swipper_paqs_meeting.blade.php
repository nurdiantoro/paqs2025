<swiper-container id="swiper-about" class="mySwiper" pagination="false" navigation="false" centered-slides="true"
    autoplay-delay="0" slides-per-view="3" space-between="10" loop="true" speed="3000">
    @foreach ($main_programs['PAQS Meeting'] as $program)
        {{-- @foreach ($program->video as $video)
            <swiper-slide>
                <img src="{{ asset('storage/' . $video) }}" class="w-full h-full object-cover rounded-xl aspect-video">
            </swiper-slide>
        @endforeach --}}
        @foreach ($program->image as $image)
            <swiper-slide>
                <img src="{{ asset('storage/' . $image) }}" class="w-full h-full object-cover rounded-xl aspect-video">
            </swiper-slide>
        @endforeach
    @endforeach
</swiper-container>
