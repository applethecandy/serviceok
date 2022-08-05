<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogCard extends Component
{
    public $post;

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function getImageSource($post)
    {
        return $post->image()->first()->source;
    }

    public function getTopicName($post)
    {
        return $post->topic()->first()->name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-card');
    }
}