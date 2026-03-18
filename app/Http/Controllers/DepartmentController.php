<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::with(['members.positionRole', 'workPrograms'])->get();
        return view('pages.department', compact('departments')); // Sesuaikan path view
    }
}
