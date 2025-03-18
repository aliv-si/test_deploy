<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use Illuminate\Http\Request;

class QuestionBankController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $questions = QuestionBank::when($search, function ($query, $search) {
            return $query->where('subject', 'like', "%$search%");
        })->get();

        return view('pages.bank-soal', compact('questions'));
    }
}
