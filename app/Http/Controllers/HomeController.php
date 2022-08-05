<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Review;
use App\Models\Post;

class HomeController extends Controller
{
    /* public function __construct(Service $service)
    {
        $this->service = $service;
    } */

    public function __invoke(Request $request)
    {
        return view('pages.index', [
            'services' => Service::all(),
            'reviews' => Review::latest()->get(),
            'posts' => Post::latest()->get()
        ]);
    }
}