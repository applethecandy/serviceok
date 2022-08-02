@extends('layout.app')

@section('content')
    <section class="section banner-section">
        <div class="container">
            <div class="banner-form">
                <h1 class="h1">Освободим вас от хлопот</h1>

                <p class="text-medium">Поможем найти надёжного исполнителя для ваших задач</p>

                <form action="" class="find-service">
                    <label for="input-field">Начните вводить название услуги</label>
                    <div class="custom-select" id="custom-select-1">
                        <input type="text" placeholder="Чем вам помочь?" class="input-field custom-select__input" />

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
            <x-header-with-checkmark>
                1 028 мастеров готовы помочь вам
            </x-header-with-checkmark>

            <ul class="masters-list">
                <x-masters-list-item>Стирка ковров</x-masters-list-item>
                <x-masters-list-item>Ремонт техники</x-masters-list-item>
                <x-masters-list-item>Уборка дома</x-masters-list-item>
                <x-masters-list-item>Помощь с переездом</x-masters-list-item>
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
                    <a href="{{ route('questions') }}" class="button">Оставить заявку</a>
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
                @for ($i = 0; $i < 10; $i++)
                    <x-review />
                @endfor
            </div>
        </div>
    </section>

    <section class="section main-blog-section">
        <div class="container">
            <x-header-with-checkmark>
                Новые публикации в <a href="{{ route('post.index') }}" class="link_red">блоге</a>
            </x-header-with-checkmark>

            <div class="main-blogs">
                <x-blog-card />
                <x-blog-card />
                <x-blog-card class="blog-card_big" />
            </div>
        </div>
    </section>
@endsection
