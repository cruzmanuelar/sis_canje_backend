<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'imagen'
    ];

    public function centroproducto(){
        
        return $this->hasMany('App\Centroproducto');
    }
}
