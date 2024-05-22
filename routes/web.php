<?php

use App\Models\Category;
use App\Models\Entrada;
use App\Models\Profiler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {

    $entrada = Entrada::query()->inRandomOrder()->first();

    return $entrada->category;

});
