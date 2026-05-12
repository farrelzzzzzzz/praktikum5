<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return "Halaman About";
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/contact', function () {
    return "Halaman Contact";
});


Route::get('/user/{nama}', function ($nama) {
    return "Halo " . $nama;
});

Route::get('/nilai/{angka}', function ($angka) {
    return "Nilai kamu: " . $angka;
});