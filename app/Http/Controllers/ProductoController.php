<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;
use App\Models\Codigo;
use App\Models\User;
use App\Models\Productoscanjeados;



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
        
        $producto = Producto::where('id',$request->id_producto)->first();

        $usuario = User::where('id',Auth::id())->first();
        
        
        if($usuario->puntos >= $producto->precio_puntos){
                
            $usuario->puntos = $usuario->puntos - $producto->precio_puntos;

            $usuario->save();

            $user = Productoscanjeados::create([
                'puntos' => $producto->precio_puntos,
                'id_producto' => $producto->id,
                'id_usuario' => Auth::id()
            ]);

            return response()->json([
                'Message' => 'Has canjeado ' . $producto->nombre . ' por ' . $producto->precio_puntos . ' puntos'
            ]);
            
        }else{

            return response()->json([
                'message' => "No cuentas con suficientes puntos"
            ]);
        }

    }
}
