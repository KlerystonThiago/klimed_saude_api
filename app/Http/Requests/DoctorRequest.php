<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|min:5',
            'crm' => 'required|min:10',
            'specialty' => 'required|array',
        ];

        if($this->method() == 'PUT'){
            $rules['specialty'] = ['nullable', 'array'];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo name é obrigatório!',
            'name.min' => 'O campo name deve ter no mínimo :min caracteres!',
            'crm.required' => 'O campo CRM é obrigatório!',
            'crm.min' => 'O campo CRM deve ter no mínimo :min caracteres!',
            'specialty.required' => 'O campo specialty é obrigatório!',
            'specialty.array' => 'O campo specialty precisa ser um array!',
        ];
    }
}
