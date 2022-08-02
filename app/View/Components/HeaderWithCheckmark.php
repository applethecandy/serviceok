<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderWithCheckmark extends Component
{
    public $nogap;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nogap = false)
    {
        $this->nogap = $nogap;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-with-checkmark');
    }
}