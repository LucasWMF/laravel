<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::prefix('usuario')->group(function(){
    Route::get('registrar', [App\Http\Controllers\UsuarioController::class, 'registrar'])->name('usuario-registrar');
    Route::get('login', [App\Http\Controllers\UsuarioController::class, 'login'])->name('usuario-login');
    Route::get('logout', [App\Http\Controllers\UsuarioController::class, 'logout'])->name('usuario-logout');
    Route::get('foto-upload', [App\Http\Controllers\UsuarioController::class, 'fotoUpload'])->name('usuario-foto-upload');
    Route::get('desativar-conta', [App\Http\Controllers\UsuarioController::class, 'desativarConta'])->name('usuario-desativar-conta');
    Route::get('perfil', [App\Http\Controllers\UsuarioController::class, 'perfil'])->name('usuario-perfil');
    Route::get('editar', [App\Http\Controllers\UsuarioController::class, 'editar'])->name('usuario-editar');
});