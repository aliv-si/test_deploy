<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspirationController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

// Route::get('/department', function () {
//     return view('pages.department');
// });

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

Route::post('/aspiration/store', [AspirationController::class, 'store'])->name('aspiration.store');

Route::get('/department', [DepartmentController::class, 'index'])->name('department');
Route::get('/department/{id_department}', [DepartmentController::class, 'show'])->name('department.detail');
