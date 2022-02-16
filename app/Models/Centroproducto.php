<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centroproducto extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'id_producto',
        'id_centro'
    ];

    public function producto(){
        
        return $this->belongsTo(Producto::class,'id_producto');
    }

    public function centro(){
        
        return $this->belongsTo('App\Centro');
    }
}
