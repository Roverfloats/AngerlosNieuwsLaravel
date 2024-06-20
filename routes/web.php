<?php

// use App\Http\Controllers\article;
use App\Http\Controllers\articles;
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



//Khalil werk -->
Route::post('/createArticle', [articles::class, 'createArticle'])->name('createArticle');

// TODO  replace this with the actual page of the article display
Route::get('/article-editor', [articles::class, 'displayInformation'])->name('displayInformation');


// TODO  Delete this route, before commiting 


Route::get('{id}', [articles::class, 'deleteArticle'])->name('deleteArticle');
