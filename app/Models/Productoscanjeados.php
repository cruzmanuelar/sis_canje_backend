<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productoscanjeados extends Model
{
    use HasFactory;
    protected $fillable = [
        'puntos'
    ];

    public function producto(){
        
        return $this->belongsTo('App\Producto');
    }

    public function usuario(){
        
        return $this->belongsTo('App\User');
    }
}
