<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtenteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('utentes', UtenteController::class);
