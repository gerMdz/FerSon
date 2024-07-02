<?php

use App\Models\Category;
use App\Models\Curso;
use App\Models\Entrada;
use App\Models\Profiler;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {

    $number = rand(1, 10);

    $curso = Curso::find($number);
    $secciones = $curso->sections()->get();

    $lecciones = $curso->getLessons();

    return compact('curso', 'secciones', 'lecciones');

});
