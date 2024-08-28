<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/accounts', function () {
    return view('dashboard.accounts');
})->middleware(['auth', 'verified'])->name('accounts');

Route::get('/dashboard/finances', function () {
    return view('dashboard.finances');
})->middleware(['auth', 'verified'])->name('finances');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', function () {
    return view('home.about');
});

require __DIR__.'/auth.php';
