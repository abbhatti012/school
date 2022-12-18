<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin-dashboard');
    }
    public function teachers(){
        return view('admin.teachers');
    }
    public function add_teacher(){
        return view('admin.add-teacher');
    }
    public function admins(){
        return view('admin.admins');
    }
    public function add_admin(){
        return view('admin.add-admin');
    }
    public function students(){
        return view('admin.students');
    }
    public function add_student(){
        return view('admin.add-student');
    }
    public function gifts(){
        return view('admin.gifts');
    }
    public function add_gift(){
        return view('admin.add-gift');
    }
    public function assign_point(){
        return view('admin.assign-points');
    }
    public function classes(){
        return view('admin.classes');
    }
    public function add_class(){
        return view('admin.add-class');
    }
    public function categories(){
        return view('admin.categories');
    }
    public function add_category(){
        return view('admin.add-category');
    }
    public function point_value(){
        return view('admin.point-value');
    }
    public function profile(){
        return view('admin.profile');
    }
}
