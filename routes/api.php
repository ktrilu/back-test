<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/bodegas', 'App\Http\Controllers\BodegaController@index');
Route::get('/marcas', 'App\Http\Controllers\MarcaController@index');
Route::get('/modelos', 'App\Http\Controllers\ModeloController@index');
Route::get('/dispositivos', 'App\Http\Controllers\DispositivoController@index');

Route::get('/dispositivos/bodega/{id_bodega}', 'App\Http\Controllers\DispositivoController@dispositivosBodega');
Route::get('/dispositivos/marca/{id_marca}', 'App\Http\Controllers\DispositivoController@dispositivosMarca');
Route::get('/dispositivos/modelo/{id_modelo}', 'App\Http\Controllers\DispositivoController@dispositivosModelo');

Route::get('/modelos/marca/{id_marca}', 'App\Http\Controllers\ModeloController@modelosMarca');
