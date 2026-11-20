<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/ninjas', [NinjaController::class,'index']);
Route::get('/ninjas/create', [NinjaController::class, 'create']);
Route::get('/ninjas/show', [NinjaController::class, 'show']);
