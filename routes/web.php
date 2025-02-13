<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/department', function () {
    return view('department');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/banksoal', function () {
    return view('bank-soal');
});