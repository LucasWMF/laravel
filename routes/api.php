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

// GET
// Route::get('/cli', function () {
//     return [
//         'nomes' => [
//             'Lucas',
//             'Maria',
//             'José',
//             'João',
//             'Paulo',
//             'Pedro',
//             'Ana',
//             'Elias',
//             'Moisés',
//             'Abraão',
//         ],
//     ];
// });

Route::get('/cliente', function () {
    return [
        ['nome' => 'Lucas'],
        ['nome' => 'Maria'],
        ['nome' => 'José'],
        ['nome' => 'João'],
        ['nome' => 'Paulo'],
        ['nome' => 'Pedro'],
        ['nome' => 'Ana'],
        ['nome' => 'Elias'],
        ['nome' => 'Moisés'],
        ['nome' => 'Abraão'],
    ];
});
