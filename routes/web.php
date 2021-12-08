<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productosController;
use App\Http\Controllers\serviciosController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VentasController;

/*
Route::get('/', function () {
    return view('welcome');
});*/

//           URL   VIEW
//Route::view('/','inicio');
//Route::view('/productos','productos');
//Route::view('/contacto','contacto');

Route::get('/', serviciosController::class ) -> name('Inicio');
Route::get('/productos', productosController::class ) -> name('Productos');
Route::get('/contacto', contactoController::class ) -> name('Contacto');

Route::resource('/usuarios', UsuariosController::class);
Route::resource('/crear', UsuariosController::class);
Route::resource('/editar', UsuariosController::class);
Route::resource('/borrar', UsuariosController::class);

Route::resource('/rproducto', ProductController::class);
Route::resource('/pcrear', ProductController::class);
Route::resource('/peditar', ProductController::class);
Route::resource('/pborrar', ProductController::class);

Route::resource('/ventas', VentasController::class);
Route::resource('/vcrear', VentasController::class);
Route::resource('/veditar', VentasController::class);
Route::resource('/vborrar', VentasController::class);