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
                                <h2 class="h2">@lang('pages/questions.title')</h2>

                                <div class="questions-steps__input">
                                    <div class="custom-select" id="custom-select-1">
                                        <input type="text" name="service" id="service" placeholder="@lang('pages/questions.service')"
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
                                    <p class="text-small">@lang('pages/questions.example')</p>
                                    <div class="find-service__list">
                                        @foreach ($services->take(4) as $service)
                                            <x-service-example-button :service="$service" />
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">@lang('pages/questions.name')</h2>

                                <div class="questions-steps__input">
                                    <input type="text" name="name" class="input-field" placeholder="@lang('pages/questions.your_name')"
                                        id="question-name" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">@lang('pages/questions.date')</h2>

                                <div class="questions-steps__input">
                                    <input type="time" name="time" class="input-field" placeholder="Time"
                                        id="question-time" />
                                    <input type="date" name="date" class="input-field" placeholder="Date"
                                        id="question-date" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">@lang('pages/questions.address')</h2>

                                <div class="questions-steps__input">
                                    <input type="text" name="address" class="input-field" id="question-address"
                                        placeholder="@lang('pages/questions.your_address')" />
                                </div>
                            </div>

                            <div class="swiper-slide questions-steps__item">
                                <h2 class="h2">@lang('pages/questions.phone')</h2>

                                <div class="questions-steps__input">
                                    <input type="tel" name="phone" class="input-field" id="question-phone"
                                        placeholder="+49" min="0" step="1" required />
                                    <p class="small-text">@lang('pages/questions.phone_description')</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="questions-steps__buttons">
                        <div class="questions-pagi-button_prev button">@lang('pages/questions.previous')</div>
                        <div class="questions-pagi-button_next button-main">@lang('pages/questions.next')</div>
                        <input type="submit" class="button-main" id="submit-form" value="@lang('pages/questions.next')"
                            style="display: none" />
                    </div>
                </div>
                <div class="questions-steps__pagi text-medium">@lang('pages/questions.step') <span id="current-step">1</span>
                    @lang('pages/questions.from') <span id="all-steps">5</span></div>
            </form>
        </div>
    </section>
@endsection
