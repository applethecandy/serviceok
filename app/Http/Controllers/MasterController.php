<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\MasterRequest;

class MasterController extends Controller
{
    public function __construct(Master $master)
    {
        $this->master = $master;
    }

    public function create()
    {
        return view('pages.become-master', [
            'services' => Service::all()
        ]);
    }

    public function store(MasterRequest $request)
    {
        $this->master->createMaster($request);
        return redirect()->route('master.create')->with('message', __('master.created'));
    }
}
