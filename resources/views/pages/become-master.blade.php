@extends('layout.app')

@section('content')
    <section class="section registration-section">
        <div class="container">
            <x-header-with-checkmark>
                Станьте исполнителем
            </x-header-with-checkmark>

            <p class="text-big">
                ServiceOK поможет вам найти новых клиентов и зарабатывать на выполнении услуг. Зарегистрируйтесь
                на сайте и после потверждения ваших данных,
                вам будут поступать звонки с заявками от наших специалистов.
            </p>

            <form action="{{ route('master.store') }}" class="master-form" method="POST">
                <div class="master-form__data">
                    <h4 class="h4">Ваши данные</h4>
                    @csrf
                    @method('PUT')

                    <div class="master-form__field">
                        <label for="name">Имя</label>
                        <input type="text" class="input-field" name="name" placeholder="Ваше имя" id="name" />
                    </div>

                    <div class="master-form__field">
                        <label for="surname">Фамилия</label>
                        <input type="text" class="input-field" name="surname" placeholder="Ваша фамилия"
                            id="surname" />
                    </div>

                    <div class="master-form__field">
                        <label for="city">Город, в котором <br> вы будете работать</label>
                        <input type="text" class="input-field" name="city" placeholder="Город" id="city" />
                    </div>

                    <div class="master-form__field">
                        <label for="phone">Номер телефона</label>
                        <input type="text" class="input-field" name="phone" placeholder="+49" id="phone" />
                    </div>
                </div>

                <div class="master-form__services">
                    <h4 class="h4">Услуги, которые вы можете оказывать</h4>

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

                <input type="submit" value="Зарегистрироваться" class="button-main">
            </form>
        </div>
    </section>
@endsection
