@extends('layout.app')

@section('content')
    <section class="section registration-section">
        <div class="container">
            <x-header-with-checkmark>
                @lang('pages/become_master.title')
            </x-header-with-checkmark>

            <p class="text-big">
                @lang('pages/become_master.description')
            </p>

            <form action="{{ route('master.store') }}" class="master-form" method="POST">
                <div class="master-form__data">
                    <h4 class="h4">@lang('pages/become_master.your_data')</h4>
                    @csrf
                    @method('PUT')

                    <div class="master-form__field">
                        <label for="name">@lang('pages/become_master.name')</label>
                        <input type="text" class="input-field" name="name" placeholder="@lang('pages/become_master.your_name')"
                            id="name" />
                    </div>

                    <div class="master-form__field">
                        <label for="surname">@lang('pages/become_master.surname')</label>
                        <input type="text" class="input-field" name="surname" placeholder="@lang('pages/become_master.your_surname')"
                            id="surname" />
                    </div>

                    <div class="master-form__field">
                        <label for="city">@lang('pages/become_master.city_1') <br> @lang('pages/become_master.city_2')</label>
                        <input type="text" class="input-field" name="city" placeholder="@lang('pages/become_master.your_city')"
                            id="city" />
                    </div>

                    <div class="master-form__field">
                        <label for="phone">@lang('pages/become_master.phone')</label>
                        <input type="text" class="input-field" name="phone" placeholder="+49" id="phone" />
                    </div>
                </div>

                <div class="master-form__services">
                    <h4 class="h4">@lang('pages/become_master.services')</h4>

                    <div class="master-form__boxes">
                        @foreach ($services as $service)
                            <label class="check">
                                <input type="checkbox" name="services[]" value="{{ $service->id }}" />
                                <span class="checkmark"></span>
                                {{ $service->title }}
                            </label>
                        @endforeach
                    </div>
                </div>

                <input type="submit" value="@lang('pages/become_master.register')" class="button-main">
            </form>
        </div>
    </section>
@endsection
