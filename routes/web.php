<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('index');
Route::get('/courses', function () {
    return view('pages.courses.index');
})->name('course.index');

Route::get('/course/details', function () {
    return view('pages.courses.details');
})->name('course.details');
Route::get('/shops', function () {
    return view('pages.shop.index');
})->name('shop.index');

Route::get('/shop/details', function () {
    return view('pages.shop.details');
})->name('shop.details');
Route::get('/student', function () {
    return view('pages.dashboard.student.index');
})->name('student');

Route::get('/teacher', function () {
    return view('pages.dashboard.teacher.index');
})->name('teacher');
