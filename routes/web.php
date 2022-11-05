<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reservar', function () {
    return view('reservar');
});
Route::get('/pedidos', function () {
    return view('pedidos');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/login', function () {
    return view('login');
});

Route::resource('usuarios', App\Http\Controllers\usuariosController::class);

Route::resource('platillos', App\Http\Controllers\platillosController::class);

Route::resource('bebidas', App\Http\Controllers\bebidasController::class);

Route::resource('reservaciones', App\Http\Controllers\reservacionesController::class);

Route::resource('mesas', App\Http\Controllers\mesasController::class);

Route::resource('detalleplatillos', App\Http\Controllers\detalleplatillosController::class);

Route::resource('detallebebida', App\Http\Controllers\detallebebidaController::class);


Route::resource('usuarios', App\Http\Controllers\usuariosController::class);

Route::resource('platillos', App\Http\Controllers\platillosController::class);

Route::resource('bebidas', App\Http\Controllers\bebidasController::class);

Route::resource('reservaciones', App\Http\Controllers\reservacionesController::class);

Route::resource('mesas', App\Http\Controllers\mesasController::class);

Route::resource('detalleplatillos', App\Http\Controllers\detalleplatillosController::class);

Route::resource('detallebebida', App\Http\Controllers\detallebebidaController::class);

Route::resource('ventas', App\Http\Controllers\ventasController::class);
