<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Review extends Component
{
    public $review;

    public function __construct($review)
    {
        $this->review = $review;
    }

    public function getImageSource($review)
    {
        return $review->image()->first()->source;
    }

    public function render()
    {
        return view('components.review');
    }
}