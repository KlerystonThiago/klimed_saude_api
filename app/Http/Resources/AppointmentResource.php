<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PatientResource;
use App\Http\Resources\DoctorResource;
use App\Models\Patient;
use App\Models\Specialty;

class AppointmentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'patient' => [
                'id' => $this->patient->id,
                'birthDate' => $this->patient->birthDate,
                'phone' => $this->patient->phone,
                'health_plans' => $this->patient->health_plans
            ],
            'doctor' => [
                'id' => $this->doctor->id,
                'name' => $this->doctor->name,
                'crm' => $this->doctor->crm,
                'specialitys' => $this->doctor->specialtys
            ],
            'procedure' => $this->procedure,
            'date' => $this->date,
            'hour' => $this->hour,
            'private' => $this->private,
        ];
    }
}
