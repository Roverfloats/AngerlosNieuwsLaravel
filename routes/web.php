<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/archive.html', function () {
    return view('archive');
});

Route::get('/article', function() {
    return view('article');
});

Route::get('/newspaper', function () {
    return view('news-paper');
});
