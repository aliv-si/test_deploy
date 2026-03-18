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
        $newsList = News::orderBy('created_at', 'desc')->take(4)->get(); 
        $departments = Department::take(3)->get();
        $members = Member::with('positionRole')->orderBy('position_id')->take(3)->get();
        $totalMembers = Member::count();
        return view('pages.index', compact('newsList', 'departments', 'members', 'totalMembers')); 
    }
}