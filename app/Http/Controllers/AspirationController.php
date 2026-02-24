<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Exception;

class AspirationController extends Controller
{
    public function index()
    {
        return view('pages.aspirasi');
    }

    public function store(Request $request)
    {
        try {
            $isAnonymous = $request->boolean('is_anonymous');

            $request->validate([
                'email_student' => $isAnonymous ? 'nullable|email' : ['required', 'email', 'regex:/^.+@students\.amikom\.ac\.id$/'],
                'class' => $isAnonymous ? 'nullable|string|max:255' : 'required|string|max:255',
                'aspiration' => 'required',
            ], [
                'email_student.required' => 'Email mahasiswa wajib diisi.',
                'email_student.email' => 'Format email tidak valid.',
                'email_student.regex' => 'Email harus menggunakan domain @students.amikom.ac.id.',
            ]);

            Aspiration::create([
                'email_student' => $request->email_student,
                'class' => $request->class,
                'aspiration' => $request->aspiration,
                'is_anonymous' => $request->boolean('is_anonymous'),
                'date' => now(),
            ]);

            return response()->json(['success' => true, 'message' => 'Aspirasi berhasil dikirim!']);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 422);
        }
    }
}