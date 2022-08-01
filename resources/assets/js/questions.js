import Swiper from "swiper/bundle";
import "swiper/css/bundle";

const currentSlide = document.querySelector("#current-step");
const nextBtn = document.querySelector(".questions-pagi-button_next");
const submitBtn = document.querySelector("#submit-form");
const service = document.querySelector("#question-service");
const name = document.querySelector("#question-name");
const address = document.querySelector("#question-address");
const time = document.querySelector("#question-time");
const date = document.querySelector("#question-date");
const phoneNum = document.querySelector("#question-phone");

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

swiper_questions.on("slideChange", () => {
	let realIndex = swiper_questions.realIndex;
	currentSlide.innerHTML = realIndex + 1;

	if (realIndex + 1 === 5) {
		nextBtn.style.display = "none";
		submitBtn.style.display = "flex";
	} else {
		nextBtn.style.display = "flex";
		submitBtn.style.display = "none";
	}
});

if (window.location.pathname === "/questions.html") {
	const inputEl = document.querySelector("#question-phone");
	let acceptKey = "0123456789+";

	let checkInputTel = function (e) {
		let key = typeof e.which == "number" ? e.which : e.keyCode;
		let start = this.selectionStart,
			end = this.selectionEnd;

		let filtered = this.value.split("").filter(filterInput);
		this.value = filtered.join("");

		let move = filterInput(String.fromCharCode(key)) || key == 0 || key == 8 ? 0 : 1;
		this.setSelectionRange(start - move, end - move);
	};

	let filterInput = function (val) {
		return acceptKey.indexOf(val) > -1;
	};

	inputEl.addEventListener("input", checkInputTel);

	const modal = document.querySelector(".modal");
	document.querySelector("#modal-close").addEventListener("click", () => {
		modal.classList.remove("modal-open");
		document.querySelector("body").style.overflow = "auto";
	});

	const formSubmit = (e) => {
		e.preventDefault();
		console.log(service.value);
		console.log(name.value);
		console.log(address.value);
		console.log(time.value);
		console.log(date.value);
		console.log(phoneNum.value);
		modal.classList.add("modal-open");
	};
	document.querySelector("#questions-steps").addEventListener("submit", formSubmit);
}

export default swiper_questions;
