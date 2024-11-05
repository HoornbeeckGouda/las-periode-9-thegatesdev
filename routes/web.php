<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseYearController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::middleware(['auth'])->prefix('app')->name('app.')->group(function () {
    Route::view('/', 'app.home')->name('home');

    Route::get('/courses/table', [CourseController::class, 'table']);
    Route::resource('courses', CourseController::class);

    Route::resource('courseyears', CourseYearController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('grades', GradeController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('profiles', ProfileController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('users', UserController::class);
});
