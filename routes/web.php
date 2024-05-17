<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function (){
   $user = new User();

   $user->name= "GerMdz";
   $user->email = "ger@mdz.com.ar";
   $user->password = bcrypt('germdz');

   $user->save();

   return $user;

});
