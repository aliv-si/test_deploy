<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
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

Route::get('/detail-berita', function () {
    return view('detail-berita');
});

Route::get('/detail-department', function () {
    return view('detail-department');
});