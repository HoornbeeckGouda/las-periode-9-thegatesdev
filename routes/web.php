<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::middleware(['auth'])->prefix('app')->name('app.')->group(function () {
    Route::view('/', 'app.home')->name('home');

    Route::get('/courses/table', [CourseController::class, 'table']);
    Route::resource('courses', CourseController::class);
});
