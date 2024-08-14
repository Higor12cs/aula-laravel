<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::resource('/students', StudentController::class);
Route::resource('/courses', CourseController::class);
