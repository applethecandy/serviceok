import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function(event) {
    const swiper = new Swiper(".reviews-swiper", {
        autoheight: true,
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,

        breakpoints: {
            950: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });
});

export default swiper