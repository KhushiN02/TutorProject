<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestTeacherController extends Controller
{
  public function index()
{
    return view('student.request-teacher');
}  
}
