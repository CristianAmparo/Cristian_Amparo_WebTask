AOS.init({
    offset: 400,
    delay: 150,
});
const swiperEl = document.querySelector('swiper-container');

const params = {
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    keyboard: {
        enabled: true,
    },
    breakpoints: {
        1281: {
            slidesPerView: 2,
            slidesPerGroup: 1,
        },
        769: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
    },
    scrollbar: false,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        clickable: true,
    },
};

Object.assign(swiperEl, params)

swiperEl.initialize();
