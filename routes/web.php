<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AspirationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\QuestionBankController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('pages.index');
});


Route::get('/berita', function () {
    return view('pages.berita');
});

Route::get('/detail-berita', function () {
    return view('pages.detail-berita');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/banksoal', function () {
    return view('pages.bank-soal');
});



Route::get('/', [HomeController::class, 'index']);

Route::post('/aspiration/store', [AspirationController::class, 'store'])->name('aspiration.store');
// Route::get('/aspirations', [AspirationController::class, 'index'])->name('aspiration.index');


Route::get('/department', [DepartmentController::class, 'index'])->name('department');
Route::get('/department/{id_department}', [DepartmentController::class, 'show'])->name('department.detail');

Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/berita/tag/{tag}', [NewsController::class, 'category'])->name('news.category');

Route::get('/berita', [NewsController::class, 'index'])->name('berita');
Route::get('/banksoal', [QuestionBankController::class, 'index'])->name('banksoal');

Route::get('/banksoal/download/{id}', function ($id) {
    $question = App\Models\QuestionBank::findOrFail($id);
    $filePath = storage_path('app/public/' . $question->file_path_soal);

    if (!file_exists($filePath)) {
        abort(404, 'File tidak ditemukan');
    }

    return response()->download($filePath);
})->name('question.download');

Route::get('/banksoal/{id}', function ($id) {
    $question = App\Models\QuestionBank::findOrFail($id);
    return response()->file(storage_path('app/public/' . $question->file_path_soal));
})->name('question.view');