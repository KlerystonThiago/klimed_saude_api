<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'birthDate' => 'required|date_format:Y-m-d',
            'phone' => 'required|min:10|max:16',
            'health_plans' => 'array'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo name é obrigatório!',
            'name.min' => 'O campo name deve ter no mínimo :min!',
            'birthDate.required' => 'O campo birthDate é obrigatório!',
            'birthDate.date_format' => 'O campo birthDate precisa ser uma data no formato 0000-00-00!',
            'phone.required' => 'O campo phone é obrigatório!',
            'phone.min' => 'O campo phone deve ter no mínimo :min!',
            'phone.max' => 'O campo phone deve ter no máximo :max!',
            'health_plans.array' => 'O campo phone precisa ser um array!'
        ];
    }
}
