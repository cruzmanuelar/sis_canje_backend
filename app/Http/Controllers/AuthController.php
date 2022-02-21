<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Codigo;
use App\Models\Productoscanjeados;
use Illuminate\Support\Facades\DB;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function registro(Request $request){
        
        $user = User::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'dni' => $request->dni,
            'password' => Hash::make($request->password),
        ]);
        
        return $user;
    }

    public function login(Request $request){
        
        if(!Auth::attempt($request->only('correo','password'))){
            return response([
                'message'=> 'Credenciales invalidas'
            ]);
        }
        
        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('jwt',$token,60*24); //1 dia

        return response([
            'token' => $token,
            'message' => 'Bienvenido',
            'user' => $user->nombre,
            'puntos' => $user->puntos
        ])->withCookie($cookie);
    }

    public function user(){
        return Auth::user();
    }

    public function logout(Request $request){
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Desconectado'
        ])->withCookie($cookie);
    }

    public function getUser(){

        $usuarios = User::all();

        return response()->json([ 'users' => $usuarios]);
    }

    public function getUserId($iduser){

        $usuario = User::where('id', $iduser)->first();

        return response()->json([
            'usuario' => $usuario
        ]);
        
    }

    public function canjeUsuario(Request $request){

        $validator = Validator::make($request->all(), [
            'codigo' => 'required|min:8|max:8'
        ]);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return response()->json(['status' => 'error']);
        }

        $existencia = Codigo::where('codigo',$request->codigo)->first();

        if($existencia != null && $existencia->canjeado == false){

            $usuario = User::where('id',Auth::user()->id)->first();

            $usuario->puntos = $usuario->puntos + $existencia->puntos;

            $puntosTotales = $usuario->puntos;

            $usuario->save();

            $existencia->canjeado = true;

            $existencia->save();

            return response()->json([
                'message' => 'Has canjeado '. $existencia->puntos . ' puntos!',
                'puntos' => $puntosTotales
            ]);

        }else{
            
            return response()->json([
                'message' => 'Código inválido'
            ]);

        }
    }

    public function getCanjes(){

        $productos = DB::table('productos')
        ->join('productoscanjeados', 'productos.id', '=', 'productoscanjeados.id_producto')
        ->where('productoscanjeados.id_usuario', '=', Auth::id())
        ->get();

        return response()->json(['productos' => $productos], 200);
    }

    public function mensajePrueba(){
        
        return response()->json([
            'message' => 'ok'
        ]);
    }
}