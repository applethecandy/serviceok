<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Master;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.index', ['masters' => Master::all(), 'clients' => Client::with(['work', 'work.service'])->get()]);
    }
}