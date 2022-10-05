<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_create');
    }

    public function rules()
    {
        return [
            'email' => [
                'required',
            ],
            'mobile' => [
                'string',
                'required',
                'unique:settings',
            ],
            'whatsapp_number' => [
                'string',
                'nullable',
            ],
            'location' => [
                'string',
                'required',
            ],
        ];
    }
}
