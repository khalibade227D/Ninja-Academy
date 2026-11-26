<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome');
})->name('home');

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');
Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');
Route::get('/ninjas/{id}', [NinjaController::class, 'show'])->name('ninjas.show');
