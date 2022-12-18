<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.dashboard');
    }
    public function student_gifts(){
        return view('student.student-gifts');
    }
}
