<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\TeacherController;
use App\Http\Controllers\Student\BookingController;
use App\Http\Controllers\Student\ReportController;
use App\Http\Controllers\Student\RequestTeacherController;
use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Student\SettingsController;

/* Web Routes*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('student')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('student.dashboard');

    Route::get('/teachers', [TeacherController::class, 'index'])
        ->name('student.teachers');

    Route::get('/teacher-details', [TeacherController::class, 'show'])
        ->name('student.teacher.details');

    Route::get('/bookings', [BookingController::class, 'index'])
        ->name('student.bookings');

    Route::get('/reports', [ReportController::class, 'index'])
        ->name('student.reports');

    Route::get('/request-teacher', [RequestTeacherController::class, 'index'])
        ->name('student.request');

    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('student.profile');

    Route::get('/settings', [SettingsController::class, 'index'])
        ->name('student.settings');

});