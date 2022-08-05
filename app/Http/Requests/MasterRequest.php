<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session as FacadesSession;

class MasterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'city' => ['required', 'string'],
            'phone' => ['required', 'max:16'],
            'services' => ['array', 'required']
        ];
    }
}
