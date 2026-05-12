<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 3 route biasa
Route::get('/about', function () {
    return "Halaman About";
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/contact', function () {
    return "Halaman Contact";
});

// 2 route dengan parameter
Route::get('/user/{nama}', function ($nama) {
    return "Halo " . $nama;
});

Route::get('/nilai/{angka}', function ($angka) {
    return "Nilai kamu: " . $angka;
});