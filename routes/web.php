<?php

use App\Models\Entrada;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {


    $number = rand(1, 100);
    $entradas = Entrada::find($number);

    $comentario = $entradas->comentarios()->create([
        'body' => 'Esto es un comentario inicial'
    ]);

    return [$entradas->comentarios, $comentario];
});
