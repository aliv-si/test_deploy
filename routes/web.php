<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AspirationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\QuestionBankController;

Route::get('/debug', function () {
    try {
        $db = \DB::connection()->getPdo() ? 'OK' : 'FAIL';
    } catch (\Exception $e) {
        $db = 'ERROR: ' . $e->getMessage();
    }
    return response(
        "APP_ENV: " . config('app.env') . "\n" .
        "APP_DEBUG: " . config('app.debug') . "\n" .
        "APP_KEY set: " . (config('app.key') ? 'YES' : 'NO') . "\n" .
        "DB: " . $db . "\n" .
        "Vite manifest: " . (file_exists(public_path('build/manifest.json')) ? 'EXISTS' : 'MISSING') . "\n" .
        "Storage link: " . (is_link(public_path('storage')) ? 'YES' : 'NO') . "\n" .
        "Log: " . (is_writable(storage_path('logs')) ? 'WRITABLE' : 'NOT WRITABLE') . "\n"
    , 200, ['Content-Type' => 'text/plain']);
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::post('/aspiration/store', [AspirationController::class, 'store'])->name('aspiration.store');
Route::get('/aspirasi', [AspirationController::class, 'index'])->name('aspirasi');


Route::get('/department', [DepartmentController::class, 'index'])->name('department');

Route::get('/berita/tag/{tag}', [NewsController::class, 'category'])->name('news.category');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/berita', [NewsController::class, 'index'])->name('berita');
Route::get('/banksoal', [QuestionBankController::class, 'index'])->name('banksoal');

Route::get('/banksoal/download/{id}', function ($id) {
    $question = App\Models\QuestionBank::findOrFail($id);
    $filePath = public_path('storage/soal/' . $question->nama_file);

    if (!file_exists($filePath)) {
        abort(404, 'File tidak ditemukan');
    }

    return response()->download($filePath);
})->name('question.download');

Route::get('/banksoal/{nama_file}', function ($nama_file) {
    $filePath = public_path('storage/soal/' . $nama_file);

    if (!file_exists($filePath)) {
        abort(404, 'File tidak ditemukan');
    }

    return response()->file($filePath);
})->where('nama_file', '.*')->name('question.view');