<?php

use App\Http\Controllers\ChurchController;
use Illuminate\Support\Facades\Route;

// This now responds to your-site.com/home
Route::get('/home', [ChurchController::class, 'index'])->name('home');

Route::get('/welcome-home', function() {
    return view('welcome-home');
})->name('welcome.home');

// This displays the welcome page
Route::get('/', function () {
    return view('welcome-home');
})->name('home');

// This handles the user info submission
Route::post('/submit-info', [UserController::class, 'store'])->name('info.store');