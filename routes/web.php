<?php

use App\Http\Controllers\ImoveisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('imoveis', ImoveisController::class);