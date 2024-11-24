<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', ProdutoController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('clientes', ClienteController::class);
