<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

// Course resource routes
Route::resource('courses', CourseController::class);

// Student resource routes
Route::resource('students', StudentController::class);
