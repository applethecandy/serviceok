import swiper from "./swiperReviews.js";
import swiper_questions from "./questions.js";
import customSelect from "./customSelect.js";
import "../scss/style.scss";

const cities = [];
for (let i of document.querySelector('.header-cities__list').children) {
    cities.push(i.textContent);
}

const burgerOpen = () => {
    const burger = document.querySelector(".nav-toggle");
    const menu = document.querySelector(".header__nav");

    const windowListener = () => {
        burger.classList.remove("opened");
        menu.classList.remove("header__nav_active");
        window.removeEventListener("click", windowListener);
    };

    burger.addEventListener("click", (e) => {
        e.stopPropagation();

        window.addEventListener("click", windowListener);

        burger.classList.toggle("opened");
        menu.classList.toggle("header__nav_active");
    });
};

const displayCities = (array) => {
    const windowListener = () => {
        document.querySelector(".header-cities").classList.remove("header-cities_open");

        window.removeEventListener("click", windowListener);
    };
    const citiesList = document.querySelector(".header-cities__list");
    const citiesOpen = document.querySelector(".header-cities__select");
    const activeCity = document.querySelector(".header-cities__selected");
    citiesList.innerHTML = "";

    window.sessionStorage.getItem('city') ? activeCity.innerHTML = window.sessionStorage.getItem('city') : null;

    array.forEach((city) => {
        const elem = document.createElement("div");
        elem.innerHTML = city;
        elem.classList.add("header-cities__item");
        elem.addEventListener("click", () => {
            activeCity.innerHTML = city;
            window.sessionStorage.setItem('city', city);
        });
        citiesList.appendChild(elem);
    });

    citiesOpen.addEventListener("click", (e) => {
        e.stopPropagation();
        window.addEventListener("click", windowListener);
        document.querySelector(".header-cities").classList.toggle("header-cities_open");
    });
};

burgerOpen();
displayCities(cities);

if (window.location.pathname === ("/index.html" || "/questions.html")) {
    const selector = document.querySelector("#custom-select-1");
    const exampleList = document.querySelector(".find-service__list");

    const services = [
        { id: "service-1", name: "???????????? ????????????", dataSet: 1 },
        { id: "service-2", name: "???????????? ??????????????", dataSet: 2 },
        { id: "service-3", name: "???????????? ????????", dataSet: 3 },
        { id: "service-4", name: "???????????? ?? ??????????????????", dataSet: 4 },
        { id: "service-5", name: "??????????????????", dataSet: 5 },
        { id: "service-6", name: "????????????????", dataSet: 6 },
        { id: "service-7", name: "????????????????", dataSet: 7 },
        { id: "service-8", name: "????????????", dataSet: 8 },
        { id: "service-9", name: "????????????", dataSet: 9 },
        { id: "service-10", name: "????????????", dataSet: 10 },
    ];

    customSelect(selector, services);

    const bannerBtns = document.querySelectorAll(".blog-button");
    bannerBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            console.log(btn.innerHTML);
        });
    });

    const showExamples = (select) => {
        const input = select.querySelector(".custom-select__input");
        exampleList.innerHTML = "";

        services.slice(0, 4).forEach((item) => {
            const elem = document.createElement("div");
            elem.innerHTML = item.name;
            elem.classList.add("blog-button");
            elem.classList.add("banner-btn");
            elem.dataset.service = item.dataSet;

            elem.addEventListener("click", () => {
                input.value = item.name;
            });

            exampleList.appendChild(elem);
        });
    };

    showExamples(selector);
}
