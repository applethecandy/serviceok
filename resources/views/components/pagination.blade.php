@if ($paginator->hasPages())
    <div class="blog-pagination">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="blog-pagination__btn">{{ $element }}</div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <div class="blog-pagination__btn blog-pagination__btn_active">{{ $page }}</div>
                    @else
                        <a class="blog-pagination__btn" href="{{ $url }}">
                            <div>
                                {{ $page }}
                            </div>
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
@endif
