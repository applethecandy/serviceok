<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ mix('css/style.css') }}" />
    <script defer src="{{ mix('js/main.js') }}"></script>
</head>

<body>
    <div id="page">
        <header class="header">
            <div class="container">
                <a href="index.html" class="header__logo">
                    <img src="{{ asset('/images/logo.svg') }}" alt="logo" />
                </a>

                <div class="header-cities">
                    <div class="link header-cities__select">
                        <p class="header-cities__selected">Берлин</p>
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.03147 1.03147L5 5.06294L0.968532 1.03147" stroke="#0C1534" stroke-width="1.5" />
                        </svg>
                    </div>

                    <div class="header-cities__list">
                        <div class="header-cities__item">Берлин</div>
                        <div class="header-cities__item">Мангейм</div>
                        <div class="header-cities__item">Штутгарт</div>
                        <div class="header-cities__item">Кёльн</div>
                        <div class="header-cities__item">Дюссельдорф</div>
                    </div>
                </div>

                <nav class="header__nav">
                    <a href="blog.html" class="link header__nav_item">Блог</a>
                    <a href="become_master.html" class="link header__nav_item">Стать исполнителем</a>

                    <div class="header__phone header__nav_item">
                        <a href="tel:+78126039402" class="link">+7 (812) 603-94-02</a>
                        <span class="free-call">звонок бесплатный</span>
                    </div>
                </nav>

                <div class="nav-close">
                    <button class="nav-toggle">
                        <svg width="40" height="40" viewBox="0 0 100 100">
                            <path class="line line1"
                                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                            <path class="line line2" d="M 20,50 H 80" />
                            <path class="line line3"
                                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <main>
            <section class="section banner-section">
                <div class="container">
                    <div class="banner-form">
                        <h1 class="h1">Освободим вас от хлопот</h1>

                        <p class="text-medium">Поможем найти надёжного исполнителя для ваших задач</p>

                        <form action="" class="find-service">
                            <label for="input-field">Начните вводить название услуги</label>
                            <div class="custom-select" id="custom-select-1">
                                <input type="text" placeholder="Чем вам помочь?"
                                    class="input-field custom-select__input" />

                                <div class="custom-select__list"></div>
                            </div>

                            <div class="find-service__buttons">
                                <div class="find-service__examples">
                                    <p class="text-small">Например:</p>
                                    <div class="find-service__list">
                                        <div class="blog-button banner-btn" data-service="1">Стирка ковров</div>
                                        <div class="blog-button banner-btn" data-service="1">Ремонт техники</div>
                                        <div class="blog-button banner-btn" data-service="1">Уборка дома</div>
                                        <div class="blog-button banner-btn" data-service="1">Помощь с переездом</div>
                                    </div>
                                </div>

                                <input type="submit" value="Поиск" class="button-main" />
                            </div>
                        </form>
                    </div>

                    <div class="banner__img">
                        <img src="{{ asset('/images/banner.png') }}" alt="banner-img" />
                    </div>
                </div>
            </section>

            <section class="section masters-section">
                <div class="container">
                    <h2 class="h2 section_h2">
                        <svg width="32" height="20" viewBox="0 0 32 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.9429 12.4219L24.3357 0H32L10.819 20L0 9.31794H7.5L10.9429 12.4219Z"
                                fill="url(#paint0_linear_3849_2670)" />
                            <defs>
                                <linearGradient id="paint0_linear_3849_2670" x1="45.9566" y1="12.0726"
                                    x2="27.2959" y2="38.9507" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E43C3C" />
                                </linearGradient>
                            </defs>
                        </svg>
                        1 028 мастеров готовы помочь вам
                    </h2>

                    <ul class="masters-list">
                        <li class="masters-list__item"><a href="" class="link">Стирка ковров</a></li>
                        <li class="masters-list__item"><a href="" class="link">Ремонт техники</a></li>
                        <li class="masters-list__item"><a href="" class="link">Уборка дома</a></li>
                        <li class="masters-list__item"><a href="" class="link">Помощь с переездом</a></li>
                    </ul>
                </div>
            </section>

            <section class="section service-section">
                <div class="container">
                    <h2 class="h2 section_h2">
                        <svg width="32" height="20" viewBox="0 0 32 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.9429 12.4219L24.3357 0H32L10.819 20L0 9.31794H7.5L10.9429 12.4219Z"
                                fill="url(#paint0_linear_3849_2670)" />
                            <defs>
                                <linearGradient id="paint0_linear_3849_2670" x1="45.9566" y1="12.0726"
                                    x2="27.2959" y2="38.9507" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E43C3C" />
                                </linearGradient>
                            </defs>
                        </svg>
                        Как работает Service OK ?
                    </h2>

                    <div class="work-stages">
                        <div class="work-stages__item">
                            <h4 class="h4"><span class="link_red">01.</span> Опишите задачу</h4>
                            <p class="text-big">Это бесплатно и не требует регистрации на сайте</p>
                        </div>

                        <div class="work-stages__item">
                            <h4 class="h4"><span class="link_red">02.</span> Ожидайте звонка</h4>
                            <p class="text-big">В выбранное вами время с вами свяжется специалист</p>
                        </div>

                        <div class="work-stages__item">
                            <h4 class="h4"><span class="link_red"> 03.</span> Вам помогут</h4>
                            <p class="text-big">После обсуждения условий получите нужную вам услугу</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section request-section">
                <div class="container request">
                    <div class="request__content">
                        <h2 class="h2">Специалист нужен срочно?</h2>

                        <p class="text-big">Позвоните нам или оставьте заявку, мы постараемся вам помочь найти
                            свободных нужных специалистов</p>

                        <div class="request__buttons">
                            <a href="tel:tel:+78126039402" class="button-main">Позвонить</a>
                            <a href="questions.html" class="button">Оставить заявку</a>
                        </div>
                    </div>

                    <div class="request__img">
                        <img src="{{ asset('/images/phone.png') }}" alt="phone-img" />
                    </div>
                </div>
            </section>

            <section class="section reviews-section">
                <div class="container">
                    <h2 class="h2 section_h2">
                        <svg width="32" height="20" viewBox="0 0 32 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.9429 12.4219L24.3357 0H32L10.819 20L0 9.31794H7.5L10.9429 12.4219Z"
                                fill="url(#paint0_linear_3849_2670)" />
                            <defs>
                                <linearGradient id="paint0_linear_3849_2670" x1="45.9566" y1="12.0726"
                                    x2="27.2959" y2="38.9507" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E43C3C" />
                                </linearGradient>
                            </defs>
                        </svg>
                        Отзывы о сервисе
                    </h2>
                </div>

                <div class="reviews-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card__header">
                                    <div class="review-card__img"><img
                                            src="{{ asset('/images/plugs/review-avatar.jpg') }}"
                                            alt="review-avatar" />
                                    </div>
                                    <p class="review-card__name text-big">Сергей Иванов</p>
                                </div>

                                <div class="review-card__content">
                                    <p class="text-medium">
                                        Приехал с работы и не смог попасть в квартиру - ключ сломался прямо в замке. К
                                        счастью, сосед помог мне быстро найти мастера через
                                        ServiceOK. Мастер быстро приехал, починил замок и взял за это совсем немного
                                        денег. Теперь я и сам обязательно буду пользоваться сервисом.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card__header">
                                    <div class="review-card__img"><img
                                            src="{{ asset('/images/plugs/review-avatar.jpg') }}"
                                            alt="review-avatar" />
                                    </div>
                                    <p class="review-card__name text-big">Сергей Иванов</p>
                                </div>

                                <div class="review-card__content">
                                    <p class="text-medium">
                                        Приехал с работы и не смог попасть в квартиру - ключ сломался прямо в замке. К
                                        счастью, сосед помог мне быстро найти мастера через
                                        ServiceOK. Мастер быстро приехал, починил замок и взял за это совсем немного
                                        денег. Теперь я и сам обязательно буду пользоваться сервисом.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card__header">
                                    <div class="review-card__img"><img
                                            src="{{ asset('/images/plugs/review-avatar.jpg') }}"
                                            alt="review-avatar" />
                                    </div>
                                    <p class="review-card__name text-big">Сергей Иванов</p>
                                </div>

                                <div class="review-card__content">
                                    <p class="text-medium">
                                        Приехал с работы и не смог попасть в квартиру - ключ сломался прямо в замке. К
                                        счастью, сосед помог мне быстро найти мастера через
                                        ServiceOK. Мастер быстро приехал, починил замок и взял за это совсем немного
                                        денег. Теперь я и сам обязательно буду пользоваться сервисом.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card__header">
                                    <div class="review-card__img"><img
                                            src="{{ asset('/images/plugs/review-avatar.jpg') }}"
                                            alt="review-avatar" />
                                    </div>
                                    <p class="review-card__name text-big">Сергей Иванов</p>
                                </div>

                                <div class="review-card__content">
                                    <p class="text-medium">
                                        Приехал с работы и не смог попасть в квартиру - ключ сломался прямо в замке. К
                                        счастью, сосед помог мне быстро найти мастера через
                                        ServiceOK. Мастер быстро приехал, починил замок и взял за это совсем немного
                                        денег. Теперь я и сам обязательно буду пользоваться сервисом.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card__header">
                                    <div class="review-card__img"><img
                                            src="{{ asset('/images/plugs/review-avatar.jpg') }}"
                                            alt="review-avatar" />
                                    </div>
                                    <p class="review-card__name text-big">Сергей Иванов</p>
                                </div>

                                <div class="review-card__content">
                                    <p class="text-medium">
                                        Приехал с работы и не смог попасть в квартиру - ключ сломался прямо в замке. К
                                        счастью, сосед помог мне быстро найти мастера через
                                        ServiceOK. Мастер быстро приехал, починил замок и взял за это совсем немного
                                        денег. Теперь я и сам обязательно буду пользоваться сервисом.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <div class="review-card__header">
                                    <div class="review-card__img"><img
                                            src="{{ asset('/images/plugs/review-avatar.jpg') }}"
                                            alt="review-avatar" />
                                    </div>
                                    <p class="review-card__name text-big">Сергей Иванов</p>
                                </div>

                                <div class="review-card__content">
                                    <p class="text-medium">
                                        Приехал с работы и не смог попасть в квартиру - ключ сломался прямо в замке. К
                                        счастью, сосед помог мне быстро найти мастера через
                                        ServiceOK. Мастер быстро приехал, починил замок и взял за это совсем немного
                                        денег. Теперь я и сам обязательно буду пользоваться сервисом.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section main-blog-section">
                <div class="container">
                    <h2 class="h2 section_h2">
                        <svg width="32" height="20" viewBox="0 0 32 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.9429 12.4219L24.3357 0H32L10.819 20L0 9.31794H7.5L10.9429 12.4219Z"
                                fill="url(#paint0_linear_3849_2670)" />
                            <defs>
                                <linearGradient id="paint0_linear_3849_2670" x1="45.9566" y1="12.0726"
                                    x2="27.2959" y2="38.9507" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#E43C3C" />
                                </linearGradient>
                            </defs>
                        </svg>

                        Новые публикации в <a href="" class="link_red">блоге</a>
                    </h2>

                    <div class="main-blogs">
                        <div class="blog-card">
                            <a href="article.html" class="blog-card__link">
                                <div class="blog-card__img">
                                    <img src="{{ asset('/images/plugs/blog-img.jpg') }}" alt="blog-img" />
                                </div>

                                <div class="blog-card__description">
                                    <p class="blog-card-filter">Советы, лайфхаки</p>

                                    <p class="blog-card-text">Мастер на все руки: специалисты широкого профиля vs узкие
                                        эксперты</p>

                                    <p class="blog-card-filter">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.07692 13V10.75H3.5V13H1.07692ZM4.03846 13V10.75H6.73077V13H4.03846ZM1.07692 10.25V7.75H3.5V10.25H1.07692ZM4.03846 10.25V7.75H6.73077V10.25H4.03846ZM1.07692 7.25V5H3.5V7.25H1.07692ZM7.26923 13V10.75H9.96154V13H7.26923ZM4.03846 7.25V5H6.73077V7.25H4.03846ZM10.5 13V10.75H12.9231V13H10.5ZM7.26923 10.25V7.75H9.96154V10.25H7.26923ZM4.30769 3.5C4.30769 3.63281 4.18149 3.75 4.03846 3.75H3.5C3.35697 3.75 3.23077 3.63281 3.23077 3.5V1.25C3.23077 1.11719 3.35697 1 3.5 1H4.03846C4.18149 1 4.30769 1.11719 4.30769 1.25V3.5ZM10.5 10.25V7.75H12.9231V10.25H10.5ZM7.26923 7.25V5H9.96154V7.25H7.26923ZM10.5 7.25V5H12.9231V7.25H10.5ZM10.7692 3.5C10.7692 3.63281 10.643 3.75 10.5 3.75H9.96154C9.81851 3.75 9.69231 3.63281 9.69231 3.5V1.25C9.69231 1.11719 9.81851 1 9.96154 1H10.5C10.643 1 10.7692 1.11719 10.7692 1.25V3.5ZM14 3C14 2.45313 13.512 2 12.9231 2H11.8462V1.25C11.8462 0.5625 11.2404 0 10.5 0H9.96154C9.22116 0 8.61539 0.5625 8.61539 1.25V2H5.38462V1.25C5.38462 0.5625 4.77885 0 4.03846 0H3.5C2.75962 0 2.15385 0.5625 2.15385 1.25V2H1.07692C0.487981 2 0 2.45313 0 3V13C0 13.5469 0.487981 14 1.07692 14H12.9231C13.512 14 14 13.5469 14 13V3Z"
                                                fill="#6A7C92" />
                                        </svg>
                                        22.07.2022
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="blog-card">
                            <a href="article.html" class="blog-card__link">
                                <div class="blog-card__img">
                                    <img src="{{ asset('/images/plugs/blog-img.jpg') }}" alt="blog-img" />
                                </div>

                                <div class="blog-card__description">
                                    <p class="blog-card-filter">Советы, лайфхаки</p>

                                    <p class="blog-card-text">Мастер на все руки: специалисты широкого профиля vs узкие
                                        эксперты</p>

                                    <p class="blog-card-filter">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.07692 13V10.75H3.5V13H1.07692ZM4.03846 13V10.75H6.73077V13H4.03846ZM1.07692 10.25V7.75H3.5V10.25H1.07692ZM4.03846 10.25V7.75H6.73077V10.25H4.03846ZM1.07692 7.25V5H3.5V7.25H1.07692ZM7.26923 13V10.75H9.96154V13H7.26923ZM4.03846 7.25V5H6.73077V7.25H4.03846ZM10.5 13V10.75H12.9231V13H10.5ZM7.26923 10.25V7.75H9.96154V10.25H7.26923ZM4.30769 3.5C4.30769 3.63281 4.18149 3.75 4.03846 3.75H3.5C3.35697 3.75 3.23077 3.63281 3.23077 3.5V1.25C3.23077 1.11719 3.35697 1 3.5 1H4.03846C4.18149 1 4.30769 1.11719 4.30769 1.25V3.5ZM10.5 10.25V7.75H12.9231V10.25H10.5ZM7.26923 7.25V5H9.96154V7.25H7.26923ZM10.5 7.25V5H12.9231V7.25H10.5ZM10.7692 3.5C10.7692 3.63281 10.643 3.75 10.5 3.75H9.96154C9.81851 3.75 9.69231 3.63281 9.69231 3.5V1.25C9.69231 1.11719 9.81851 1 9.96154 1H10.5C10.643 1 10.7692 1.11719 10.7692 1.25V3.5ZM14 3C14 2.45313 13.512 2 12.9231 2H11.8462V1.25C11.8462 0.5625 11.2404 0 10.5 0H9.96154C9.22116 0 8.61539 0.5625 8.61539 1.25V2H5.38462V1.25C5.38462 0.5625 4.77885 0 4.03846 0H3.5C2.75962 0 2.15385 0.5625 2.15385 1.25V2H1.07692C0.487981 2 0 2.45313 0 3V13C0 13.5469 0.487981 14 1.07692 14H12.9231C13.512 14 14 13.5469 14 13V3Z"
                                                fill="#6A7C92" />
                                        </svg>
                                        22.07.2022
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="blog-card blog-card_big">
                            <a href="article.html" class="blog-card__link">
                                <div class="blog-card__img">
                                    <img src="{{ asset('/images/plugs/blog-img.jpg') }}" alt="blog-img" />
                                </div>

                                <div class="blog-card__description">
                                    <p class="blog-card-filter">Советы, лайфхаки</p>

                                    <p class="blog-card-text">Мастер на все руки: специалисты широкого профиля vs узкие
                                        эксперты</p>

                                    <p class="blog-card-filter">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.07692 13V10.75H3.5V13H1.07692ZM4.03846 13V10.75H6.73077V13H4.03846ZM1.07692 10.25V7.75H3.5V10.25H1.07692ZM4.03846 10.25V7.75H6.73077V10.25H4.03846ZM1.07692 7.25V5H3.5V7.25H1.07692ZM7.26923 13V10.75H9.96154V13H7.26923ZM4.03846 7.25V5H6.73077V7.25H4.03846ZM10.5 13V10.75H12.9231V13H10.5ZM7.26923 10.25V7.75H9.96154V10.25H7.26923ZM4.30769 3.5C4.30769 3.63281 4.18149 3.75 4.03846 3.75H3.5C3.35697 3.75 3.23077 3.63281 3.23077 3.5V1.25C3.23077 1.11719 3.35697 1 3.5 1H4.03846C4.18149 1 4.30769 1.11719 4.30769 1.25V3.5ZM10.5 10.25V7.75H12.9231V10.25H10.5ZM7.26923 7.25V5H9.96154V7.25H7.26923ZM10.5 7.25V5H12.9231V7.25H10.5ZM10.7692 3.5C10.7692 3.63281 10.643 3.75 10.5 3.75H9.96154C9.81851 3.75 9.69231 3.63281 9.69231 3.5V1.25C9.69231 1.11719 9.81851 1 9.96154 1H10.5C10.643 1 10.7692 1.11719 10.7692 1.25V3.5ZM14 3C14 2.45313 13.512 2 12.9231 2H11.8462V1.25C11.8462 0.5625 11.2404 0 10.5 0H9.96154C9.22116 0 8.61539 0.5625 8.61539 1.25V2H5.38462V1.25C5.38462 0.5625 4.77885 0 4.03846 0H3.5C2.75962 0 2.15385 0.5625 2.15385 1.25V2H1.07692C0.487981 2 0 2.45313 0 3V13C0 13.5469 0.487981 14 1.07692 14H12.9231C13.512 14 14 13.5469 14 13V3Z"
                                                fill="#6A7C92" />
                                        </svg>
                                        22.07.2022
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <nav class="footer__nav">
                    <a href="index.html">
                        <img src="{{ asset('/images/logo.svg') }}" alt="logo" />
                    </a>

                    <a href="index.html" class="link">Главная</a>
                    <a href="become_master.html" class="link">Стать исполнителем</a>
                    <a href="impresum.html" class="link">Impresum</a>
                </nav>

                <div class="footer__contacts">
                    <h4 class="h4">Контакты</h4>

                    <div class="footer__phone">
                        <a href="tel:+78126039402" class="link">+7 (812) 603-94-02</a>
                        <span class="free-call">звонок бесплатный</span>
                        <span class="footer__time">с 9:00 до 21:00</span>
                    </div>

                    <a href="mail:service_ok@gmail.com" class="link link_red">service_ok@gmail.com</a>

                    <div class="footer__socials">
                        <a href="" class="social-link"><svg width="34" height="35"
                                viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="34" height="35" fill="#A2B6C8" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.6749 9.00234C16.4775 9.00226 16.2947 9.00217 16.1247 9.00244V9C14.3059 9.00203 13.957 9.01423 13.0568 9.0549C12.1053 9.09862 11.5887 9.25722 11.2447 9.39141C10.7893 9.56872 10.464 9.78019 10.1225 10.1218C9.7809 10.4634 9.56905 10.7887 9.39218 11.2442C9.25861 11.5882 9.09962 12.1047 9.05611 13.0563C9.00935 14.0851 9 14.3926 9 16.9989C9 19.6052 9.00935 19.9143 9.05611 20.9431C9.09942 21.8947 9.25861 22.4112 9.39218 22.7548C9.56946 23.2105 9.7809 23.535 10.1225 23.8766C10.464 24.2182 10.7893 24.4297 11.2447 24.6066C11.5889 24.7401 12.1053 24.8991 13.0568 24.9431C14.0855 24.9898 14.3943 25 17.0001 25C19.6057 25 19.9147 24.9898 20.9434 24.9431C21.8949 24.8996 22.4117 24.741 22.7553 24.6068C23.2109 24.4299 23.5352 24.2184 23.8767 23.8768C24.2183 23.5354 24.4301 23.2111 24.607 22.7556C24.7406 22.412 24.8996 21.8955 24.9431 20.9439C24.9898 19.9151 25 19.606 25 17.0013C25 14.3966 24.9898 14.0876 24.9431 13.0587C24.8998 12.1071 24.7406 11.5907 24.607 11.247C24.4297 10.7916 24.2183 10.4662 23.8767 10.1246C23.5354 9.78303 23.2107 9.57157 22.7553 9.39467C22.4113 9.26108 21.8949 9.10207 20.9434 9.05856C19.9145 9.01179 19.6057 9.00244 17.0001 9.00244L16.6749 9.00234ZM20.2529 17.0033C20.2529 15.2065 18.7964 13.75 17 13.75C15.2034 13.75 13.7471 15.2065 13.7471 17.0033C13.7471 18.8 15.2034 20.2566 17 20.2566C18.7964 20.2566 20.2529 18.8 20.2529 17.0033ZM22.2086 10.6235C21.5621 10.6235 21.0376 11.1474 21.0376 11.7942C21.0376 12.4408 21.5621 12.9654 22.2086 12.9654C22.8552 12.9654 23.3797 12.4408 23.3797 11.7942C23.3797 11.1476 22.8552 10.623 22.2086 10.623V10.6235ZM11.9886 17.0037C11.9886 14.2357 14.2325 11.9915 17.0001 11.9915H16.9999C19.7674 11.9915 22.0107 14.2357 22.0107 17.0037C22.0107 19.7716 19.7676 22.0148 17.0001 22.0148C14.2325 22.0148 11.9886 19.7716 11.9886 17.0037Z"
                                    fill="#F7FAFF" />
                            </svg>
                        </a>

                        <a href="" class="social-link"><svg width="34" height="35"
                                viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M34 0H0V35H34V0ZM17.3197 16.9989V26H13.7723V16.9993H12V13.8975H13.7723V12.0352C13.7723 9.50471 14.773 8 17.6162 8H19.9832V11.1022H18.5037C17.3969 11.1022 17.3237 11.5356 17.3237 12.3446L17.3197 13.8971H20L19.6864 16.9989H17.3197Z"
                                    fill="#A2B6C8" />
                            </svg>
                        </a>

                        <a href="" class="social-link"><svg width="34" height="35"
                                viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M34 0H0V35H34V0ZM8 13C8 11.8954 8.89543 11 10 11H24C25.1046 11 26 11.8954 26 13V22.9091C26 24.0137 25.1046 24.9091 24 24.9091H10C8.89543 24.9091 8 24.0137 8 22.9091V13ZM20.7916 17.908C21.1907 18.1137 21.1907 18.6136 20.7916 18.8193L15.4728 21.5608C15.064 21.7715 14.5455 21.5167 14.5455 21.1051V15.6222C14.5455 15.2106 15.064 14.9558 15.4728 15.1665L20.7916 17.908Z"
                                    fill="#A2B6C8" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer__policy">
                    <a href="" class="link link_gray">Условия пользования</a>
                    <a href="" class="link link_gray">Политика конфиденциальности</a>
                </div>
            </div>
        </footer>
    </div>


</body>

</html>
