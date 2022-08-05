@extends('layout.app')

@section('content')
    <section class="section banner-section">
        <div class="container">
            <div class="banner-form">
                <h1 class="h1">Освободим вас от хлопот</h1>

                <p class="text-medium">Поможем найти надёжного исполнителя для ваших задач</p>

                <form action="quiz" class="find-service">
                    <label for="service">Начните вводить название услуги</label>
                    <div class="custom-select" id="custom-select-1">
                        <input type="text" placeholder="Чем вам помочь?" name="service" id="service"
                            class="input-field custom-select__input" list="services" />
                        <x-service-datalist :services="$services" />
                        <div class="custom-select__list"></div>
                    </div>

                    <div class="find-service__buttons">
                        <div class="find-service__examples">
                            <p class="text-small">Например:</p>
                            <div class="find-service__list">
                                @foreach ($services->take(4) as $service)
                                    <x-service-example-button :service="$service" />
                                @endforeach
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
            <x-header-with-checkmark>
                1 028 мастеров готовы помочь вам
            </x-header-with-checkmark>

            <ul class="masters-list">
                @foreach ($services as $service)
                    <x-masters-list-item :service="$service" />
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section service-section">
        <div class="container">
            <x-header-with-checkmark>
                Как работает Service OK ?
            </x-header-with-checkmark>

            <x-work-stages />
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
                    <a href="{{ route('work.create') }}" class="button">Оставить заявку</a>
                </div>
            </div>

            <div class="request__img">
                <img src="{{ asset('/images/phone.png') }}" alt="phone-img" />
            </div>
        </div>
    </section>

    <section class="section reviews-section">
        <div class="container">
            <x-header-with-checkmark>
                Отзывы о сервисе
            </x-header-with-checkmark>
        </div>

        <div class="reviews-swiper">
            <div class="swiper-wrapper">
                @foreach ($reviews->take(10) as $review)
                    <x-review :review="$review" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section main-blog-section">
        <div class="container">
            <x-header-with-checkmark>
                Новые публикации в <a href="{{ route('post.index') }}" class="link_red">блоге</a>
            </x-header-with-checkmark>

            <div class="main-blogs">
                @foreach ($posts->take(3) as $index => $post)
                    @if ($index === 2)
                        <x-blog-card class="blog-card_big" :post="$post" />
                    @else
                        <x-blog-card :post="$post" />
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
