<?php

use App\Models\Profiler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {

    $profile = Profiler::find('9c80860d-420e-4b00-b05f-c251fa7142ef');
    return $profile->user;

});
