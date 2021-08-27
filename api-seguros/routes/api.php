<?php

use App\Http\Controllers\API\ClienteController;
use App\Http\Controllers\API\PolizaController;
use App\Models\Cliente;
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

//VERBOS TABLA CLIENTES
Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/{cliente}', [ClienteController::class, 'show']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::put('clientes/{cliente}', [ClienteController::class, 'update']);
Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy']);


//VERBOS TABLA POLIZAS
Route::get('polizas', [PolizaController::class, 'index']);
Route::get('polizas/{poliza}', [PolizaController::class, 'show']);
Route::post('polizas', [PolizaController::class, 'store']);
Route::put('polizas/{poliza}', [PolizaController::class, 'update']);
Route::delete('polizas/{poliza}', [PolizaController::class, 'destroy']);
