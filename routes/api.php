<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CentroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//GET: Registro de usuario
Route::post('registro', [AuthController::class,'registro']);

//GET: Todos los productos
Route::get('productos', [ProductoController::class,'getProductos']);

//GET: Todos los centros
Route::get('centros', [CentroController::class,'getCentros']);

//GET: Productos de centro especificado, y/o centro
Route::get('centro-{idcentro}',[CentroController::class,'productosCentro']);


//POST: Login usuario
Route::post('login', [AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){

    //Get: Muestra datos del usuario que inicio sesion
    Route::get('user', [AuthController::class,'user']);

    //POST: Canjear codigo por puntos
    Route::post('canje',[AuthController::class,'canjeUsuario']);

    //POST: Canejar producto por puntos
    Route::post('canjepuntos', [ProductoController::class,'canjePuntos']);

    //GET: Obtener todos los usuarios
    Route::get('usuarios',[AuthController::class,'getUser']);

    //POST: Registrar codigo de producto
    Route::post('registroCodigo',[CentroController::class,'registrarCodigo']);

    //POST: Registrar producto
    Route::post('anadirProducto',[CentroController::class,'addProduct']);

    //GET: Todos los codigos
    Route::get('codigos', [ProductoController::class,'getCodigos']);

    //GET: Obtener usuario especifico
    Route::get('user-{iduser}',[AuthController::class,'getUserId']);

    //GET: Obtener todos los canjes
    Route::get('misCanjes',[AuthController::class,'getCanjes']);

    Route::post('logout', [AuthController::class,'logout']);    
});