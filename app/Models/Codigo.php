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
        'id_producto'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function producto(){
        
        return $this->belongsTo('App\Producto');
    }

    
}
