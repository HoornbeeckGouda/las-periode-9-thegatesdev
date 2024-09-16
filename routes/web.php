<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('portal', function(){
    return view('portal');
});

Route::group(['group' => 'app', 'middleware' => ['auth']], function() {
    
});