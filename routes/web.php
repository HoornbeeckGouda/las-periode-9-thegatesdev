<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/portal', 'portal')->name('portal');

Route::middleware(['auth'])->prefix('app')->name('app.')->group(function () {
    Route::view('/', 'app.home')->name('home');
    Route::resource('profiles', ProfileController::class);
});
