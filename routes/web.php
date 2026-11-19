<?php

use app\Http\Controllers\ninjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route path ninjas
Route::get('/ninjas', function () {

    $ninjas = [['name' => 'Ryu', 'skill' => 'Fireball', 'id' => '1', 'Health' => 30],
        ['name' => 'Ayame', 'skill' => 'Stealth', 'id' => '2', 'Health' => 40],
        ['name' => 'Kenji', 'skill' => 'Swordsmanship', 'id' => '3', 'Health' => 74],
        ['name' => 'Mika', 'skill' => 'Healing', 'id' => '4', 'Health' => 90]];

    return view('ninjas.index', [
        'ninjas' => $ninjas,
        'Fname' => 'khalix Style',
    ]);
});

Route::get('/ninjas', [ninjaController::class,'index']);

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

// route path ninjas with wildcard{id}
Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ['id' => $id]);
});
