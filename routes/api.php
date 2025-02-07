<?php

use App\Http\Controllers\PacienteController;
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

Route::get('paciente',[PacienteController::class,'index']);
Route::post('paciente',[PacienteController::class,'store']);
Route::get('paciente/{paciente}',[PacienteController::class,'show']);
Route::put('paciente/{paciente}',[PacienteController::class,'update']);
Route::delete('paciente/{paciente}',[PacienteController::class,'destroy']);