<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsuarioController;

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

Route::prefix('usuario')->group(function () {
    Route::post('registrar-se', [UsuarioController::class, 'registrar']);
    Route::post('login', [UsuarioController::class, 'login']);
    Route::get('posts', [PostController::class, 'index']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [UsuarioController::class, 'logout']);
        Route::get('perfil', [UsuarioController::class, 'perfil']);
        Route::put('{id}', [UsuarioController::class, 'editar']);
        Route::post('desativar-conta', [UsuarioController::class, 'desativarConta']);
        Route::post('foto-upload', [UsuarioController::class, 'fotoUpload']);

        Route::post('posts', [PostController::class, 'store']);
    });
});