@extends('layout.app')

@section('content')
    <section class="section questions-stages-section">
        <div class="container">
            <x-work-stages />
        </div>
    </section>

    <section class="section questions-section">
        <div class="container">
            <form class="questions-steps" id="questions-steps">
                <div class="questions-steps__slider">
                    <div class="questions-steps__swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Что нужно сделать?</h2>

                                <div class="questions-steps__input">
                                    <div class="custom-select" id="custom-select-1">
                                        <input type="text" placeholder="Чем вам помочь?"
                                            class="input-field custom-select__input" />
                                        <div class="custom-select__list"></div>
                                    </div>
                                </div>

                                <div class="find-service__examples">
                                    <p class="text-small">Например:</p>
                                    <div class="find-service__list">
                                        <div class="blog-button banner-btn" data-service="1">Стирка ковров</div>
                                        <div class="blog-button banner-btn" data-service="1">Ремонт техники
                                        </div>
                                        <div class="blog-button banner-btn" data-service="1">Уборка дома</div>
                                        <div class="blog-button banner-btn" data-service="1">Помощь с переездом
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Как к вам обращаться?</h2>

                                <div class="questions-steps__input">
                                    <input type="text" class="input-field" placeholder="Ваше имя" id="question-name" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Когда приступить к работе?</h2>

                                <div class="questions-steps__input">
                                    <input type="time" class="input-field" placeholder="Время" id="question-time" />
                                    <input type="date" class="input-field" placeholder="Дата" id="question-date" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">По какому адресу?</h2>

                                <div class="questions-steps__input">
                                    <input type="text" class="input-field" id="question-address"
                                        placeholder="Укажите адрес" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Укажите свой номер телефона</h2>

                                <div class="questions-steps__input">
                                    <input type="tel" class="input-field" id="question-phone" placeholder="+49"
                                        min="0" step="1" required />
                                    <p class="small-text">Ваш номер телефона будет виден только нашим
                                        специалистам. Позже вы сами решите, показывать ли его исполнителю</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="questions-steps__buttons">
                        <div class="questions-pagi-button_prev button">Назад</div>
                        <div class="questions-pagi-button_next button-main">Далее</div>
                        <input type="submit" class="button-main" id="submit-form" value="Далее" style="display: none" />
                    </div>
                </div>
                <div class="questions-steps__pagi text-medium">Шаг <span id="current-step">1</span> из <span
                        id="all-steps">5</span></div>
            </form>
        </div>
    </section>
@endsection
