<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\OrdenCompraController;

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
Route::get('producto', [ProductoController::class, 'productos']);
Route::get('producto/{id}', [ProductoFactory::class, 'productoId']);
Route::post('crearprod', [ProductoFactory::class, 'nuevoProducto']);
Route::put('producto/{id}', [ProductoFactory::class, 'actualizarProd']);
Route::delete('producto/{id}', [ProductoFactory::class,'eliminarProd']);


//Rutas de categorias
Route::get('categoria', [CategoriaController::class, 'listar']);
Route::post('crearcategoria', [CategoriaController::class, 'nuevaCategoria']);

//Rutas de metodos de pago
Route::get('metodopago', [MetodoPagoController::class, 'metodosPago']);
Route::post('crearmetodopago', [MetodoPagoController::class, 'nuevoMetodoPago']);
Route::put('actmetodopago/{id}', [MetodoPagoController::class, 'actualizarMetodoPago']);

//Rutas carrito
Route::get('carritos', [CarritoController::class, 'carrito']);
Route::post('crearcarrito', [CarritoController::class, 'nuevoCarrito']);
Route::put('carritos/{id}', [CarritoController::class, 'actCarrito']);
Route::delete('carritos/{id}', [CarritoController::class,'eliminarCarrito']);

//orden de compra
Route::post('crearorden', [OrdenCompraController::class, 'nuevaOrden']);
Route::put('actualizarorden/{id}', [OrdenCompraController::class, 'actualizarOrden']);
