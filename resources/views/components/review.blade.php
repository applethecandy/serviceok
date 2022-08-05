<div class="swiper-slide">
    <div class="review-card">
        <div class="review-card__header">
            <div class="review-card__img"><img src="{{ $getImageSource($review) }}" alt="review-avatar" />
            </div>
            <p class="review-card__name text-big">{{ $review->author }}</p>
        </div>

        <div class="review-card__content">
            <p class="text-medium">
                {{ $review->text }}
            </p>
        </div>
    </div>
</div>
