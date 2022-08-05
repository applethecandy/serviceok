<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkRequest;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function __construct(Work $work)
    {
        $this->work = $work;
    }

    public function create()
    {
        return view('pages.questions', [
            'services' => Service::all()
        ]);
    }

    public function store(WorkRequest $request)
    {
        $this->work->createWork($request);
        return redirect()->route('work.create')->with('message', __('messages.work.created'));
    }
}