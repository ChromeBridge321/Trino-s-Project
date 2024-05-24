<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/periodictable', function () {
    return view('periodicTable');
})->name('periodictable');

Route::get('/exercices', function () {
    return view('exercices');
})->name('ejercicios');

//comit