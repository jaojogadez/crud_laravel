<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GastoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('gastos', GastoController::class);