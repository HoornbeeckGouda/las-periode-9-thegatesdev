<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/portal', 'portal')->name('portal');

Route::middleware(['auth'])->prefix('app')->name('app.')->group(function () {
    Route::view('/', 'app.home')->name('home');
    Route::resource('profiles', ProfileController::class);
    Route::resource('users', UserController::class);
});
