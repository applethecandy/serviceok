<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceDatalist extends Component
{
    public $services;

    public function __construct($services)
    {
        $this->services = $services;
    }

    public function render()
    {
        return view('components.service-datalist');
    }
}