<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use Illuminate\Http\Request;

class QuestionBankController extends Controller
{
    public function index()
    {
        // Misalnya, mengambil semua data dari tabel QuestionBank
        $questions = QuestionBank::all();
        $totalUts = QuestionBank::where('category', 'UTS')->count();
        $totalUas = QuestionBank::where('category', 'UAS')->count();

        // Mengembalikan view dan mengirim data ke view
        return view('pages.bank-soal', compact('questions', 'totalUts', 'totalUas'));
    }

    public function detail($kategori, Request $request)
    {
        $search = $request->input('search');

        $questions = QuestionBank::where('category', $kategori)
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('subject', 'like', "%$search%")
                        ->orWhere('semester', 'like', "%$search%");
                });
            })
            ->paginate(5);

        return view('pages.detail-soal', compact('questions', 'kategori'));
    }
}