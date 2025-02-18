<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/department', function () {
    return view('pages.department');
});

Route::get('/berita', function () {
    return view('pages.berita');
});

Route::get('/banksoal', function () {
    return view('pages.bank-soal');
});

Route::get('/detail-berita', function () {
    return view('pages.detail-berita');
});

Route::get('/detail-department', function () {
    return view('pages.detail-department');
});