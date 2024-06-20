<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/archive', function () {
    return view('archive');
})->name('archive');

Route::get('/article-admin', function () {
    return view('article-admin');
})->name('article-admin');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/article', function() {
    return view('article');
})->name('article');

Route::get('/newspaper', function () {
    return view('news-paper');
})->name('news-paper');

Route::get('/login', function () {
    return view('./auth/login');
})->name('login');