<?php
use App\Http\Controllers\articles;
use App\Models\article;
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

// Route::get('/article/{id}', function() {
//     return view('article', ['articles' => article::all()]);
// })->name('article');

Route::get('/article/{id}', [Articles::class, 'user']);

Route::get('/newspaper', function () {
    return view('news-paper');
})->name('news-paper');

Route::get('/login', function () {
    return view('./auth/login');
})->name('login');

Route::post('/createArticle', [articles::class, 'createArticle'])->name('createArticle');

// TODO  replace this with the actual page of the article display
Route::get('/article-editor', function () {
    return view('article-editor');
})->name('article-editor');

Route::get('/upload-article', function () {
    return view('./upload-article');
})->name('upload-article');
