<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/grupos', [App\Http\Controllers\Api\GrupoController::class, 'index']);
Route::get('/grupos/{id}/personas', [App\Http\Controllers\Api\GrupoController::class, 'getPersonas']);
Route::get('/grupos/{id}/permisos', [App\Http\Controllers\Api\GrupoController::class, 'getPermisos']);
Route::get('/usuarios/{id}/grupos', [App\Http\Controllers\Api\UsuarioController::class, 'getGrupos']);
Route::get('/usuarios/{id}/permisos', [App\Http\Controllers\Api\UsuarioController::class, 'getPermisos']);
