<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function registro(Request $request){
        
        $user = User::create([
            'nombre' => $request->input('nombre');
            'correo' => $request->input('correo');
            'password' => $request->input('password');
            'dni' => Hash::make($request->input('dni'));
        ]);

        return $user;
    }

    public function user(){
        return 'Autenticacion';
    }
}
