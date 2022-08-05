<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => ['date', 'required'],
            'time' => ['date_format:H:i', 'required'],
            'service' => ['exists:services,title', 'required'],
            'name' => ['string', 'required'],
            'address' => ['string', 'required'],
            'phone' => ['max:16', 'required']
        ];
    }
}
