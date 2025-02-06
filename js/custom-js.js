// Initialize Swiper
document.addEventListener('DOMContentLoaded', function() {
    // Banner Slider initialization
    const bannerSlider = new Swiper('.banner-slider', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        grabCursor: true,
        watchSlidesProgress: true,
        on: {
            progress: function(swiper) {
                const progress = (swiper.realIndex + 1) * (100 / swiper.slides.length);
                document.querySelector('.swiper-progress').style.setProperty('--swiper-progress', progress + '%');
            },
            slideChange: function(swiper) {
                // Update the numbers
                const prevNum = String(swiper.realIndex + 1).padStart(2, '0');
                const nextNum = String((swiper.realIndex + 2) > swiper.slides.length ? 1 : swiper.realIndex + 2).padStart(2, '0');
                
                document.querySelector('.number-prev').textContent = prevNum;
                document.querySelector('.number-next').textContent = nextNum;
            }
        }
    });

    // Marquee Slider initialization
    const marqueeSlider = new Swiper('.marquee-slider', {
        slidesPerView: 'auto',
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false
        },
        speed: 20000,
        grabCursor: true,
        mousewheelControl: true,
        keyboardControl: true,
        allowTouchMove: false
    });
});