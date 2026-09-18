<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('hola');
});

Route::get('/', function () {
    return view('welcome');
});
