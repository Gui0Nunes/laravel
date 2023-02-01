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

Route::get('/', function () {
    return response('Not Found', 404)->header('Content-Type', 'text/plain');
});

Route::get('/teste', function () {
    return "Teste com sucesso! Projeto Bíblia!";
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
