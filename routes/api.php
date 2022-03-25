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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get("/prueba", function(){

    return "hola";

});

Route::post('/inspeccionesunidad',[InspeccionesUnidadController::class,'store'])->name('api.inspeccionesunidad.store');
Route::get('/unidades',[UnidadesController::class,'index'])->name('api.unidades.index');
Route::get('/nivelesaceite',[NivelesAceiteController::class,'index'])->name('api.nivelesaceite.index');
Route::get('/nivelesgasolina',[NivelesGasolinaController::class,'index'])->name('api.nivelesgasolina.index');


