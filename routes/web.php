<?php

// use App\Http\Controllers\article;
use App\Http\Controllers\articles;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/archive.html', function () {
    return view('archive');
});


Route::post('/createArticle', [articles::class, 'createArticle'])->name('createArticle');

// TODO  replace this with the actual page of the article display
Route::get('/article-editor', [articles::class, 'displayInformation'])->name('displayInformation');


// TODO  Delete this route, before commiting 
Route::get('/', function () {
    return view('upload-article');
});

Route::get('{id}', [articles::class, 'deleteArticle'])->name('deleteArticle');