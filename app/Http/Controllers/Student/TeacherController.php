<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
        return view('student.teachers');
    }

    public function show()
    {
        return view('student.teacher-details');
    }
}