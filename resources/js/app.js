import "./bootstrap";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";


document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.cv-slider', {
        slidesPerView: 4,
        spaceBetween: 20,
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
       
        // Responsive breakpoints
        breakpoints: {
            // When window width is <= 640px (mobile)
            640: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // When window width is <= 768px (tablet)
            768: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            // When window width is <= 1024px (laptop)
            1024: {
                slidesPerView: 6,
                spaceBetween: 20
            }
        }
    });
});