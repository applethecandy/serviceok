@extends('layout.app')

@section('content')
    <section class="section banner-section">
        <div class="container">
            <div class="banner-form">
                <h1 class="h1">@lang('pages/index.header.title')</h1>

                <p class="text-medium">@lang('pages/index.header.description')</p>

                <form action="quiz" class="find-service">
                    <label for="service">@lang('pages/index.header.input.label')</label>
                    <div class="custom-select" id="custom-select-1">
                        <input type="text" placeholder="@lang('pages/index.header.input.placeholder')" name="service" id="service"
                            class="input-field custom-select__input" list="services" />
                        <x-service-datalist :services="$services" />
                        <div class="custom-select__list"></div>
                    </div>

                    <div class="find-service__buttons">
                        <div class="find-service__examples">
                            <p class="text-small">@lang('pages/index.header.example')</p>
                            <div class="find-service__list">
                                @foreach ($services->take(4) as $service)
                                    <x-service-example-button :service="$service" />
                                @endforeach
                            </div>
                        </div>

                        <input type="submit" value="@lang('pages/index.header.button')" class="button-main" />
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
                @lang('pages/index.titles.service')
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
                @lang('pages/index.titles.info')
            </x-header-with-checkmark>

            <x-work-stages />
        </div>
    </section>

    <section class="section request-section">
        <div class="container request">
            <div class="request__content">
                <h2 class="h2">@lang('pages/index.quiz.title')</h2>

                <p class="text-big">@lang('pages/index.quiz.text')</p>

                <div class="request__buttons">
                    <a href="tel:tel:08004009300" class="button-main">@lang('pages/index.quiz.buttons.call')</a>
                    <a href="{{ route('work.create') }}" class="button">@lang('pages/index.quiz.buttons.form')</a>
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
                @lang('pages/index.titles.reviews')
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
                @lang('pages/index.titles.blog') <a href="{{ route('post.index') }}" class="link_red">@lang('pages/index.titles.blog_clickable')</a>
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
