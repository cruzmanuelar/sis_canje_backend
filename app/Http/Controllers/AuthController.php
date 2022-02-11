<?php

namespace App\Http\Controllers;
use App\Models\User;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
}