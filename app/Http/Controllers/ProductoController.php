<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Codigo;

class ProductoController extends Controller
{
    public function getProductos(){
        $productos = Producto::all();

        return response()->json(['data' => $productos], 200);
    }

    public function getCodigos(){
        $codigos = Codigo::all();

        return response()->json(['data' => $codigos], 200);
    }

    public function canjePuntos(Request $request){
        
        $codigo = Codigo::where('codigo',$request->codigo)->first();

        if($codigo){
            return response()->json(['message' => 'Has canjeado ' . $codigo->puntos . ' puntos']);
        }else{
            return response()->json(['message' => 'No existe el código']);
        }
    }
}
