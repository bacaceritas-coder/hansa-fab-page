<?php

use App\Http\Controllers\MasakPotController;
use App\Http\Controllers\TutorialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tutorial', [TutorialController::class, 'index'])->name('tutorial');

Route::get('/masak-pot', [MasakPotController::class, 'index'])->name('masak-pot');
