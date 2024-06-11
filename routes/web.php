<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/archive.html', function () {
    return view('archive');
})->name('archive');

Route::get('/article-admin.html', function () {
    return view('article-admin');
})->name('article-admin');