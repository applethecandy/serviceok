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

            <form action="" class="master-form">
                <div class="master-form__data">
                    <h4 class="h4">Ваши данные</h4>

                    <div class="master-form__field">
                        <label for="firstName">Имя</label>
                        <input type="text" class="input-field" placeholder="Ваше имя" id="firstName" />
                    </div>

                    <div class="master-form__field">
                        <label for="secondName">Фамилия</label>
                        <input type="text" class="input-field" placeholder="Ваша фамилия" id="secondName" />
                    </div>

                    <div class="master-form__field">
                        <label for="city">Город, в котором <br> вы будете работать</label>
                        <input type="text" class="input-field" placeholder="Город" id="city" />
                    </div>

                    <div class="master-form__field">
                        <label for="number">Номер телефона</label>
                        <input type="text" class="input-field" placeholder="+49" id="number" />
                    </div>
                </div>

                <div class="master-form__services">
                    <h4 class="h4">Услуги, которые вы можете оказывать</h4>

                    <div class="master-form__boxes">
                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Установка или замена сантехники
                        </label>


                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Срочная помощь при аварии
                        </label>

                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Ремонт сантехники
                        </label>

                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Установка или замена сантехники
                        </label>

                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Установка или замена сантехники
                        </label>

                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Срочная помощь при аварии
                        </label>

                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Ремонт сантехники
                        </label>

                        <label class="check">
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                            Установка или замена сантехники
                        </label>
                    </div>
                </div>

                <input type="submit" value="Зарегистрироваться" class="button-main">
            </form>
        </div>
    </section>
@endsection
