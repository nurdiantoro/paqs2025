<swiper-container id="swiper-about" class="mySwiper" pagination="false" navigation="false" centered-slides="true"
    autoplay-delay="0" slides-per-view="3" space-between="0" loop="true" speed="3000">
    @if ($main_programs->has('Young QS'))
        @foreach ($main_programs['Young QS'] as $yqs)
            <p>{{ $yqs->image }}</p>
        @endforeach
    @endif
</swiper-container>
