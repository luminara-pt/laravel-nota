<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\NotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/home', homeController::class);
Route::get('/nota/list', [NotaController::class, 'list'])->name('nota.list');