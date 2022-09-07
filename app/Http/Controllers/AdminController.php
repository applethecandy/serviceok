<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Client;
use App\Models\Master;
use App\Exports\WorksExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.index', ['masters' => Master::all(), 'clients' => Client::with(['work', 'work.service'])->get()]);
    }

    public function store(Request $request)
    {
        return Work::updateComment($request);
    }

    public function export()
    {
        return Excel::download(new WorksExport, 'works.xlsx');
    }
}