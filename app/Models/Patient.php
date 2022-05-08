<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'birthDate',
        'phone'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function health_plans(){
        return $this->belongsToMany(HealthPlan::class)->withPivot('contract_number');;
    }
}
