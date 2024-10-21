import '../bootstrap';
import { Carousel } from '../classes/carousel';

document.addEventListener('DOMContentLoaded', () => {
    new Carousel(`.carousel-welcome`, `.progress-bar`,7000 );
    new Carousel(`.carousel-schools`, null, 3000 );
});

var header = document.querySelector("nav");
var prevScrollpos = window.scrollY;
var scrollThreshold = 10;

window.onscroll = function () {
    var currentScrollPos = window.scrollY;
    if (Math.abs(prevScrollpos - currentScrollPos) > scrollThreshold) {
        if (prevScrollpos > currentScrollPos) {
            header.classList.add('fixed');
            header.classList.remove('hidden');
        } else {
            header.classList.remove('fixed');
            header.classList.add('hidden');
        }
    }
    prevScrollpos = currentScrollPos;
}

new Swiper('.segments', {
    loop: true,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
        590: {
            slidesPerView: 2,
            spaceBetween: 18
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 18
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 24
        }
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
      },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
});
