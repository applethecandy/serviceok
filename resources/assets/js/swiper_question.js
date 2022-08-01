import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function(event) {
    const swiper_questions = new Swiper(".questions-steps__swiper", {
        autoheight: true,
        slidesPerView: 1,
        spaceBetween: 30,
        allowTouchMove: false,
        navigation: {
            prevEl: ".questions-pagi-button_prev",
            nextEl: ".questions-pagi-button_next",
        },
    });

    let currentSlide = document.querySelector("#current-step");

    swiper_questions.on("slideChange", () => {
        let realIndex = swiper_questions.realIndex;

        currentSlide.innerHTML = realIndex + 1;
    });
});

export default swiper_questions;