<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'crm'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function specialtys(){
        return $this->belongsToMany(Specialty::class);
    }
}
