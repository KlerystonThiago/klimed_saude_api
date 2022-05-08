<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcedureRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo name é obrigatório!',
            'name.min' => 'O campo name deve ter no mínimo :min caracteres!',
            'price.required' => 'O campo price é obrigatório!',
            'price.numeric' => 'O campo price precisa ser numérico!'
        ];
    }
}
