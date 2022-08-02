@extends('layout.app')

@section('content')
    <section class="section blog-section">
        <div class="container">
            <div class="blog-header">
                <x-header-with-checkmark nogap>
                    Блог Service OK
                </x-header-with-checkmark>

                <div class="blog-header__crumbs">
                    <span class="text-medium">Темы:</span>
                    <button class="blog-button">Интересное</button>
                    <button class="blog-button">Ремонт техники</button>
                    <button class="blog-button">Уборка дома</button>
                    <button class="blog-button">Советы, лайфхаки</button>
                </div>
            </div>

            <div class="articles">
                <x-blog-card />
                <x-blog-card />
                <x-blog-card class="blog-card_big" />
                <x-blog-card />
                <x-blog-card />
                <x-blog-card />
                <x-blog-card />
            </div>
            <div class="blog-pagination">
                <div class="blog-pagination__btn blog-pagination__btn_active">1</div>
                <div class="blog-pagination__btn">2</div>
                <div class="blog-pagination__btn">3</div>
                <div class="blog-pagination__btn">4</div>
                <div class="blog-pagination__btn">5</div>
                <div class="blog-pagination__btn">...</div>
                <div class="blog-pagination__btn">10</div>
            </div>
        </div>
    </section>
@endsection
