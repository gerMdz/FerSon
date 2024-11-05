<?php

use App\Models\Curso;
use App\Models\Entrada;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {

//    $number = rand(1, 10);
//
//    $curso = Curso::find($number);
//    $secciones = $curso->sections()->get();
//    $lecciones = $curso->getLessons();

    $number = rand(1, 100);
    $entradas = Entrada::find($number);


//    $number = rand(1, 10);
//    $number_2 = rand(11, 100);
//    $entradas->etiquetas()->sync([
//        $number => [
//            'data' => $number_2
//        ]
//    ]);
//
//    $etiquetas = $entradas->etiquetas()->get();


//    return compact('curso', 'secciones', 'lecciones', 'entradas', 'etiquetas');


return $entradas->image;
});
