<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chirps', [ChirpController::class, 'index'])->name('chirps');
Route::post('/chirps', [ChirpController::class, 'store'])->name('chirps.store');
