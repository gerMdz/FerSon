<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {

   $categories_id = [18,19];

    Category::whereIn('id', $categories_id)->delete();

    return 'Eliminado';





});
