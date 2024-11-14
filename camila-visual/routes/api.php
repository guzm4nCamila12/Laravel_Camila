<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', [UsuariosController::class, 'lista']);
Route::get('/clientes/{id}', [UsuariosController::class, 'cliente']);
Route::get('/clientes', [UsuariosController::class, 'crear']);
Route::get('/clientes/{id}', [UsuariosController::class, 'actualizar']);
Route::get('/clientes/{id}', [UsuariosController::class, 'eliminar']);