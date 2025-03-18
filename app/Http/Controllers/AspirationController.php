<?php

namespace App\Http\Controllers;

use App\Models\Aspiration;
use Illuminate\Http\Request;

class AspirationController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'email_student' => 'required|email',
            'aspiration' => 'required',
        ]);

        Aspiration::create([
            'email_student' => $request->email_student,
            'aspiration' => $request->aspiration,
            'date' => now(),
        ]);

        return redirect()->back()->with('success', 'Aspirasi berhasil dikirim!');
    }
}