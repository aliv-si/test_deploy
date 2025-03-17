<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return view('pages.department', compact('departments')); // Sesuaikan path view
    }

    public function show($id_department)
    {
        $department = Department::findOrFail($id_department);
        return view('pages.detail-department', compact('department'));
    }
}
