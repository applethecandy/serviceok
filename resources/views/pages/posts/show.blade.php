@extends('layout.app')

@section('content')
    <section class="section article-section">
        <div class="container">
            <article class="article">
                <div class="article__crums">
                    {{-- temporary remove topics --}}
                    {{-- <a href="{{ route('post.index', ['theme' => $post->topic()->first()->name]) }}" class="blog-card-filter"
                        id="blog-topic">{{ $post->topic()->first()->name }}</a> --}}
                    <span class="blog-card-filter" id="blog-date"><svg width="14" height="14" viewBox="0 0 14 14"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.07692 13V10.75H3.5V13H1.07692ZM4.03846 13V10.75H6.73077V13H4.03846ZM1.07692 10.25V7.75H3.5V10.25H1.07692ZM4.03846 10.25V7.75H6.73077V10.25H4.03846ZM1.07692 7.25V5H3.5V7.25H1.07692ZM7.26923 13V10.75H9.96154V13H7.26923ZM4.03846 7.25V5H6.73077V7.25H4.03846ZM10.5 13V10.75H12.9231V13H10.5ZM7.26923 10.25V7.75H9.96154V10.25H7.26923ZM4.30769 3.5C4.30769 3.63281 4.18149 3.75 4.03846 3.75H3.5C3.35697 3.75 3.23077 3.63281 3.23077 3.5V1.25C3.23077 1.11719 3.35697 1 3.5 1H4.03846C4.18149 1 4.30769 1.11719 4.30769 1.25V3.5ZM10.5 10.25V7.75H12.9231V10.25H10.5ZM7.26923 7.25V5H9.96154V7.25H7.26923ZM10.5 7.25V5H12.9231V7.25H10.5ZM10.7692 3.5C10.7692 3.63281 10.643 3.75 10.5 3.75H9.96154C9.81851 3.75 9.69231 3.63281 9.69231 3.5V1.25C9.69231 1.11719 9.81851 1 9.96154 1H10.5C10.643 1 10.7692 1.11719 10.7692 1.25V3.5ZM14 3C14 2.45313 13.512 2 12.9231 2H11.8462V1.25C11.8462 0.5625 11.2404 0 10.5 0H9.96154C9.22116 0 8.61539 0.5625 8.61539 1.25V2H5.38462V1.25C5.38462 0.5625 4.77885 0 4.03846 0H3.5C2.75962 0 2.15385 0.5625 2.15385 1.25V2H1.07692C0.487981 2 0 2.45313 0 3V13C0 13.5469 0.487981 14 1.07692 14H12.9231C13.512 14 14 13.5469 14 13V3Z"
                                fill="#6A7C92" />
                        </svg>
                        {{ $post->created_at->format('d.m.Y') }}</span>
                </div>

                <x-header-with-checkmark>
                    {!! $post->title !!}
                </x-header-with-checkmark>

                <div class="article__img">
                    <img src="/images/{{ $post->image()->first()->source }}" alt="article-img" />
                </div>

                <span class="blog-text">
                    {!! $post->text !!}
                </span>

                <div class="article__share">
                    <p class="text-big">@lang('pages/posts.share')</p>

                    <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg"
                        id="fb-share-button">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M34 0H0V35H34V0ZM17.3197 16.9989V26H13.7723V16.9993H12V13.8975H13.7723V12.0352C13.7723 9.50471 14.773 8 17.6162 8H19.9832V11.1022H18.5037C17.3969 11.1022 17.3237 11.5356 17.3237 12.3446L17.3197 13.8971H20L19.6864 16.9989H17.3197Z"
                            fill="#A2B6C8" onmouseover="this.style.fill='#829db5'" onmouseout="this.style.fill='#A2B6C8'" />
                    </svg>

                    <script>
                        var fbButton = document.getElementById('fb-share-button');
                        var url = window.location.href;

                        fbButton.addEventListener('click', function() {
                            window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
                                'facebook-share-dialog',
                                'width=800,height=600'
                            );
                            return false;
                        });
                    </script>
                </div>
            </article>

            <div class="more-articles">
                <h4 class="h4">@lang('pages/posts.also_read')</h4>

                <div class="more-articles__container">
                    @foreach ($posts->take(3) as $post)
                        <x-blog-card :post="$post" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
