<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ProdukController;

Route::get('/menuMakanan', [ProdukController::class, 'index']);