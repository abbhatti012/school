<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::group(['middleware'=> 'auth'],function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin-dashboard');

    Route::get('/teachers', [AdminController::class, 'teachers'])->name('teachers');
    Route::get('/add-teacher', [AdminController::class, 'add_teacher'])->name('add-teacher');
    
    Route::get('/students', [AdminController::class, 'students'])->name('students');
    Route::get('/add-student', [AdminController::class, 'add_student'])->name('add-student');
    
    Route::get('/admins', [AdminController::class, 'admins'])->name('admins');
    Route::get('/add-admin', [AdminController::class, 'add_admin'])->name('add-admin');

    Route::get('/gifts', [AdminController::class, 'gifts'])->name('gifts');
    Route::get('/add-gift', [AdminController::class, 'add_gift'])->name('add-gift');
    Route::get('/assign-point', [AdminController::class, 'assign_point'])->name('assign-point');

    Route::get('/classes', [AdminController::class, 'classes'])->name('classes');
    Route::get('/add-class', [AdminController::class, 'add_class'])->name('add-class');
    
    Route::get('/categories', [AdminController::class, 'categories'])->name('categories');
    Route::get('/add-category', [AdminController::class, 'add_category'])->name('add-category');
    
    Route::get('/students', [AdminController::class, 'students'])->name('students');
    Route::get('/add-student', [AdminController::class, 'add_student'])->name('add-student');
    
    Route::get('/gifts', [AdminController::class, 'gifts'])->name('gifts');
    Route::get('/assign-point', [AdminController::class, 'assign_point'])->name('assign-point');
    
    Route::get('/classes', [AdminController::class, 'classes'])->name('classes');
    
    Route::get('/teacher-dashboard', [TeacherController::class, 'index'])->name('teacher-dashboard');
    
    Route::get('/student-dashboard', [StudentController::class, 'index'])->name('student-dashboard');
    Route::get('/student-gifts', [StudentController::class, 'student_gifts'])->name('student-gifts');
});

Route::get('/point-value', [AdminController::class, 'point_value'])->name('point-value');
Route::get('/profile', [AdminController::class, 'profile'])->name('profile');