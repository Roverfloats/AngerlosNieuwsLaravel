<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VariableConverter;

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
// Route::post('/process-variable', function (Illuminate\Http\Request $request) {
//     $receivedVariable = $request->input('variable');
    
//     // Now you can use $receivedVariable in your PHP code
    
//     // For example, you can echo it:
//     return "Received variable in PHP: " . $receivedVariable;
// });

// Route::post('/convert-variable', [VariableConverter::class, 'convertVariable']);
