<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/home', homeController::class);