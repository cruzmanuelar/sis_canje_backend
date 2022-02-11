<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio_puntos',
        'canje_puntos',
        'imagen'
    ];

    public function codigo(){
        
        return $this->hasMany('App\Codigo');
    }

    public function centroproducto(){
        
        return $this->hasMany('App\Centroproducto');
    }
}
