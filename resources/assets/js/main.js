import swiper from "./swiper_reviews.js";
import swiper_questions from "./swiper_question";
import "../scss/style.scss";

const burger = document.querySelector(".nav-toggle");
const menu = document.querySelector(".header__nav");

burger.addEventListener("click", () => {
	burger.classList.toggle("opened");

	menu.classList.toggle("header__nav_active");
});

const modal = document.querySelector(".modal");
// const modalBtn = document.querySelector("#modal-open");

document.querySelector("#modal-close").addEventListener("click", () => {
	modal.classList.remove("modal-open");
	document.querySelector("body").style.overflow = "auto";
});

// modalBtn.addEventListener("click", () => {
// 	modal.classList.add("modal-open");
// 	document.querySelector("body").style.overflow = "hidden";
// });
