<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/archive', function () {
    return view('archive');
})->name('archive');

Route::get('/article-admin', function () {
    return view('article-admin');
})->name('article-admin');

Route::get('/article', function() {
    return view('article');
})->name('article');

Route::get('/newspaper', function () {
    return view('news-paper');
})->name('news-paper');