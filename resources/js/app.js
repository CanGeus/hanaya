import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

// import Swiper JS
import Swiper from 'swiper';

import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.min.js';

// core version + navigation, pagination modules:

window.Swiper = Swiper;

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',  
    }
});