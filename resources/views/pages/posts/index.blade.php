@extends('layout.app')

@section('content')
    <section class="section blog-section">
        <div class="container">
            <div class="blog-header">
                <x-header-with-checkmark nogap>
                    @lang('pages/posts.blog')
                </x-header-with-checkmark>

                {{-- temporary remove topics --}}
                {{-- <div class="blog-header__crumbs">
                    <form action="{{ route('post.index') }}" style="display: contents">
                        <span class="text-medium">@lang('pages/posts.themes')</span>
                        @foreach ($topics->take(4) as $topic)
                            <button class="blog-button" name="theme" value="{{ $topic->name }}">{{ $topic->name }}</button>
                        @endforeach
                </div> --}}
            </div>

            <div class="articles">
                @foreach ($posts as $index => $post)
                    @if ($index === 2)
                        <x-blog-card class="blog-card_big" :post="$post" />
                    @else
                        <x-blog-card :post="$post" />
                    @endif
                @endforeach
            </div>
            {{ $posts->links('components.pagination') }}
        </div>
    </section>
@endsection
