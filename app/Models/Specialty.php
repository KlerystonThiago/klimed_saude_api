<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    protected $hidden = [
        'pivot',
        'created_at',
        'updated_at'
    ];

    public function doctors(){
        return $this->belongsToMany(Doctor::class);
    }
}
