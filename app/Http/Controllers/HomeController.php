<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Department;
use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newsList = News::orderBy('created_at', 'desc')->take(8)->get(); 
        $departments = Department::all();
        $members = Member::orderBy('order')->take(4)->get();
        $totalMembers = Member::count();
        return view('pages.index', compact('newsList', 'departments', 'members', 'totalMembers')); 
    }
}