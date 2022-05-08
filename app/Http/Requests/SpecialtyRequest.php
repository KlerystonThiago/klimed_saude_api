<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialtyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo name é obrigatório!',
            'name.min' => 'O campo name deve ter no mínimo :min caracteres!'
        ];
    }
}
