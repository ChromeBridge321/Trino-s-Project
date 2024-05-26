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

Route::get('/exercices-selector', function () {
    return view('tanteoGallery');
})->name('galeriatanteo');

Route::get('/exercise-1', function () {
    return view('Exercise-1');
})->name('Exercise-1');


Route::get('/exercise-1', [App\Http\Controllers\ChemicalController::class, 'index'])->name('index');
Route::post('/exercise-require-1', [App\Http\Controllers\ChemicalController::class, 'generate'])->name('exercise-require-1');

//comit