<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas de usuarios
Route::get('usuario', [UsuarioController::class, 'usuarios']);// ruta para traer todos los usuarios
Route::get('usuario/{id}', [UsuarioController::class, 'usuarioId']); // ruta para traer un usuario especifico
Route::post('crearuser', [UsuarioController::class, 'nuevoUsuario']); // crear un nuevo usuario
Route::put('usuario/{id}', [UsuarioController::class, 'actUsuario']);//actualizar un usuario
Route::delete('usuario/{id}', [UsuarioController::class, 'eliminarUsuario']);//eliminar un usuario


//Rutas de productos
Route::get('producto', [ProductosController::class, 'producto']);
Route::get('producto/{id}', [ProductosController::class, 'productoId']);
Route::post('crearprod', [ProductosController::class, 'nuevoProducto']);
Route::put('producto/{id}', [ProductosController::class, 'actualizarProd']);
Route::delete('producto/{id}', [ProductosController::class,'eliminarProd']);