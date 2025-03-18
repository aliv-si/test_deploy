<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newsList = News::orderBy('created_at', 'desc')->take(5)->get(); 
        return view('pages.index', compact('newsList')); 
    }
}