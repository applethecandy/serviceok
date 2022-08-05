@extends('layout.app')

@section('content')
    <section class="section questions-stages-section">
        <div class="container">
            <x-work-stages />
        </div>
    </section>

    <section class="section questions-section">
        <div class="container">
            <form action="{{ route('work.store') }}" method="POST" class="questions-steps" id="questions-steps">
                @csrf
                @method('PUT')
                <div class="questions-steps__slider">
                    <div class="questions-steps__swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Что нужно сделать?</h2>

                                <div class="questions-steps__input">
                                    <div class="custom-select" id="custom-select-1">
                                        <input type="text" name="service" id="service" placeholder="Чем вам помочь?"
                                            class="input-field custom-select__input" list="services"
                                            value="{{ request()->service ?? '' }}" />
                                        <datalist id="services">
                                            @foreach ($services as $service)
                                                <option value="{{ $service->title }}">
                                                </option>
                                            @endforeach
                                        </datalist>
                                        <div class="custom-select__list"></div>
                                    </div>
                                </div>

                                <div class="find-service__examples">
                                    <p class="text-small">Например:</p>
                                    <div class="find-service__list">
                                        @foreach ($services->take(4) as $service)
                                            <x-service-example-button :service="$service" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Как к вам обращаться?</h2>

                                <div class="questions-steps__input">
                                    <input type="text" name="name" class="input-field" placeholder="Ваше имя"
                                        id="question-name" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Когда приступить к работе?</h2>

                                <div class="questions-steps__input">
                                    <input type="time" name="time" class="input-field" placeholder="Время"
                                        id="question-time" />
                                    <input type="date" name="date" class="input-field" placeholder="Дата"
                                        id="question-date" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">По какому адресу?</h2>

                                <div class="questions-steps__input">
                                    <input type="text" name="address" class="input-field" id="question-address"
                                        placeholder="Укажите адрес" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">Укажите свой номер телефона</h2>

                                <div class="questions-steps__input">
                                    <input type="tel" name="phone" class="input-field" id="question-phone"
                                        placeholder="+49" min="0" step="1" required />
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
