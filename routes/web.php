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

Auth::routes();

Route::resource('lugars', App\Http\Controllers\LugarController::class);
Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::resource('rols', App\Http\Controllers\RolController::class);
Route::resource('permisos', App\Http\Controllers\PermisoController::class);

Route::resource('convenios', App\Http\Controllers\ConvenioController::class);
Route::resource('eventos', App\Http\Controllers\EventoController::class);
Route::resource('gastronomias', App\Http\Controllers\GastronomiaController::class);
Route::resource('mapas', App\Http\Controllers\MapaController::class);
Route::resource('tiposervicios', App\Http\Controllers\TiposervicioController::class);
Route::resource('rutas', App\Http\Controllers\RutaController::class);
Route::resource('servicios', App\Http\Controllers\ServicioController::class);
Route::resource('tipconvenios', App\Http\Controllers\TipconvenioController::class);
Route::resource('tipoeventos', App\Http\Controllers\TipoeventoController::class);
Route::resource('tipolugars', App\Http\Controllers\TipolugarController::class);
Route::resource('tipoplatos', App\Http\Controllers\TipoplatoController::class);
Route::resource('tiposervicios', App\Http\Controllers\TiposervicioController::class);
Route::resource('calificasiones', App\Http\Controllers\CalificasioneController::class);


Route::get('iglesias', [App\Http\Controllers\IglesiaController::class, 'index'])->name('iglesias')->middleware('auth');
Route::get('Administrador', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');;
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');;
Route::resource('senderismo', App\Http\Controllers\senderismocontroller::class)->middleware('auth');;
Route::resource('hoteles', App\Http\Controllers\Hotelescontroller::class)->middleware('auth');;
Route::resource('museos', App\Http\Controllers\Museoscontroller::class)->middleware('auth');;





Route::post('/change/password', [App\Htpp\Controllers\UserAjustesController::class,'changePassword'])->name('changePassword');
Route::get('/nuevacontraseña', [App\Http\Controllers\UserAjustesController::class, 'nuevacontraseña'])->name('NuevaContraseña')->middleware('auth');