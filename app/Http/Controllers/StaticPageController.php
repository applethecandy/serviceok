<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function impresum()
    {
        return view('pages.impresum');
    }
}
