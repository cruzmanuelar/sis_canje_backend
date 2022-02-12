<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Codigo;
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
        
        // $user = User::create([
        //     'nombre' => $request->input('nombre');
        //     'correo' => $request->input('correo');
        //     'password' => $request->input('password');
        //     'dni' => Hash::make($request->input('dni'));
        // ]);
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
            'message' => 'Bienvenido'
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


        // $user = Auth::user();

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
            $usuario->save();

            $existencia->canjeado = true;

            $existencia->save();

            return response()->json([
                'message' => 'Has canjeado '. $usuario->puntos . ' puntos!'
            ]);

        }else{
            
            return response()->json([
                'message' => 'Código inválido'
            ]);

        }

    }
}