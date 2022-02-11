<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'puntos',
        'canjeado'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
