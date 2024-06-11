<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        $request->input('javascript_variable');
        $articles = Article::take(10)->get();
        return view('article')->with('articles', $articles);
    }
}
