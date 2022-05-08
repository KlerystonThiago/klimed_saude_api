<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HealthPlanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required|min:5',
            'phone' => 'required|min:10|max:16'
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'O campo description é obrigatório!',
            'description.min' => 'O campo description deve ter no mínimo :min!',
            'phone.required' => 'O campo phone é obrigatório!',
            'phone.min' => 'O campo phone deve ter no mínimo :min!',
            'phone.max' => 'O campo phone deve ter no máximo :max!'
        ];
    }
}
