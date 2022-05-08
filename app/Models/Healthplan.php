<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Healthplan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',
        'phone'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
