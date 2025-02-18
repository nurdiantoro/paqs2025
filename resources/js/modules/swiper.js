(() => {

    const swiperEl = document.querySelector('swiper-container')
    Object.assign(swiperEl, {
        slidesPerView: 1,
        spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
                spaceBetween: 6
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            // when window width is >= 640px
            1024: {
                slidesPerView: 5,
                spaceBetween: 10
            }
        }
    });
    swiperEl.initialize();

})();
