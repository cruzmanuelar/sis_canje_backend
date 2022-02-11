<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro;

class CentroController extends Controller
{
    public function getCentros(){
        $centros = Centro::all();

        return response()->json(['data' => $centros], 200);
    }
}
