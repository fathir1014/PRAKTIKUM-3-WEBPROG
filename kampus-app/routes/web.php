<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/matkul', [MatkulController::class, 'index']);