<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Centro;
use App\Models\Producto;
use App\Models\Centroproducto;
use App\Models\Codigo;

class CentroController extends Controller
{
    public function getCentros(){
        $centros = Centro::all();

        return response()->json(['data' => $centros], 200);
    }

    public function productosCentro($idcentro){
        

        $centro = Centro::where('id',$idcentro)->first();

        $productos = DB::table('productos')
                        ->join('centroproductos', 'productos.id', '=', 'centroproductos.id_producto')
                        ->where('centroproductos.id_centro', '=', $idcentro)
                        ->get();

        return response()->json(['centro' => $centro, 'productos' => $productos], 200);

    }

    public function registrarCodigo(Request $request){

        $validator = Validator::make($request->all(), [
            'codigo' => 'required|unique:codigos|min:8|max:8'
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return response()->json(['message' => $errors->first('codigo'), 'status' => 'error']);
        }
        
        $idProducto = rand(1, 12);

        $producto = Producto::where('id',$idProducto)->first();


        $productcode = Codigo::create([
            'codigo' => $request->codigo,
            'puntos' => $producto->canje_puntos,
            'id_producto' => $idProducto
        ]);

        return response()->json([
            'random' => $idProducto, 'producto' => $producto, 'registrado' => $productcode, 'status' => 'success'
        ]);
    }
}
