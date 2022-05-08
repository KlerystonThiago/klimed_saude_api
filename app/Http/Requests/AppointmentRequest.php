<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'patient_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'procedure_id' => 'required|integer',
            'date' => 'required|date_format:Y-m-d',
            'hour' => 'required|date_format:H:i',
            'private' => 'required|boolean'
        ];
    }

    public function messages()
    {
        return [
            'patient_id.required' => 'O campo patient_id é obrigatório!',
            'patient_id.integer' => 'O campo patient_id precisa ser um inteiro!',
            'doctor_id.required' => 'O campo doctor_id é obrigatório!',
            'doctor_id.integer' => 'O campo doctor_id precisa ser um inteiro!',
            'procedure_id.required' => 'O campo procedure_id é obrigatório!',
            'procedure_id.integer' => 'O campo procedure_id precisa ser um inteiro!',
            'date.required' => 'O campo date é obrigatório',
            'date.date_format' => 'O campo date precisa ser uma data no formato 0000-00-00!',
            'hour.required' => 'O campo hour é obrigatório!',
            'hour.date_format' => 'O campo hour precisa ser uma hora no formato 00:00!',
            'private.required' => 'O campo private é obrigatório!',
            'private.boolean' => 'O campo private é um booleano!'
        ];
    }
}
