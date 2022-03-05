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
        
        $validator = Validator::make($request->all(), [
            'correo' => 'required|unique:users,correo|regex:/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/',
            'nombre' => 'required|string|unique:users,nombre|min:4|max:15',
            'dni' => 'required|integer|digits:8'
        ]);

        $messages = [
            'correo.required' => 'Correo requerido',
            'correo.unique' => 'Este correo ya fue registrado',
            'correo.regex' => 'Correo invalido',
            'nombre.required' => 'Usuario requerido',
            'nombre.string' => 'Solo caracteres para el nombre',
            'nombre.unique' => 'Este usuario ya fue registrado',
            'nombre.min' => 'Minimo 4 caracteres para usuario',
            'nombre.max' => 'Maximo 15 caracteres para usuario',
            'dni.required' => 'DNI requerido',
            'dni.integer' => 'Solo caracteres numericos',
            'dni.digits' => 'El DNI debe tener 8 digitos'
        ];

        $validator->setCustomMessages($messages);

        $errors = $validator->errors();

        if ($validator->fails()) {
            return response()->json(['Estado' => 'Fallo','Errores' => $errors]);
        }

        $user = User::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'dni' => $request->dni,
            'password' => Hash::make($request->password),
        ]);
        
        return response()->json(['Estado' => 'Registrado', 'Usuario' => $user]);
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