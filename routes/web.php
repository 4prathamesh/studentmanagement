<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/student', StudentController::class); 
Route::resource('/teachers', TeacherController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/batches', BatchController::class);
Route::resource('/enrollments', EnrollmentController::class);
Route::resource('/payments', PaymentController::class);
Route::resource('/products', ProductController::class);