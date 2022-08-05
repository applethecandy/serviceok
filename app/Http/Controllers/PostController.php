<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Topic;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.posts.index', [
            'posts' => Post::latest()->paginate(7),
            'topics' => Topic::all()
        ]);
    }

    public function show($id)
    {
        return view('pages.posts.show', [
            'posts' => Post::latest()->get(),
            'post' => Post::find($id)
        ]);
    }
}