<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ImoveisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('imoveis', ImoveisController::class);
Route::resource('clientes', ClienteController::class);

Route::get('/home', function () {
    return view('home');
});

