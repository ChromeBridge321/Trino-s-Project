<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/periodictable', function () {
    return view('periodicTable');
})->name('periodictable');
