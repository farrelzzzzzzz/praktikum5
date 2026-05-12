<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return "Ini adalah halaman about";
});

Route::get('/hello', function (){
    return "Hello, World!";
});
