<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HealthPlanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "description" => $this->description,
            "phone" => $this->phone
        ];
    }
}
