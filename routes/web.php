<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/portal', 'portal')->name('portal');
Route::view('/app', 'app.home')->name('app.home');