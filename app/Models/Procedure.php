<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'price'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
