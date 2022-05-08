<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AppointmentResource;

class PatientResource extends JsonResource
{
    public function toArray($request)
    {
        $healthplans = [];

        foreach($this->health_plans as $key => $plan){
            $healthplans[$key]['id'] = $plan->id;
            $healthplans[$key]['description'] = $plan->description;
            $healthplans[$key]['phone'] = $plan->phone;
            $healthplans[$key]['contract_number'] = $plan->pivot->contract_number;
        }

        return [
            "id" => $this->id,
            "name" => $this->name,
            "birthDate" => $this->birthDate,
            "phone" => $this->phone,
            "plan" => $healthplans
        ];




    }
}
