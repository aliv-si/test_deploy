<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;
use Exception;

class AspirationController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'email_student' => ['required', 'email', 'regex:/^.+@students\.amikom\.ac\.id$/'],
                'class' => 'required|string|max:255',
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