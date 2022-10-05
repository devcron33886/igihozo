<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_edit');
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
                'unique:settings,mobile,' . request()->route('setting')->id,
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
