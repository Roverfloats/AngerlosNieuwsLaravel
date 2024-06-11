<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class VariableConverter extends Controller
{
    
    public function convertVariable(Request $request)
    {

        // $javascriptVariable = $request->input('javascript_variable');
        
        // Perform any necessary processing on $javascriptVariable
        // $convertedVariable = strtoupper($javascriptVariable);
        // $articles = Article::take($convertedVariable)->get();

        // Return the converted variable
        // return response()->json(['php_variable' => $convertedVariable, 'articles' => $articles]);

        //return view('article')->with('php_variable', $convertedVariable);
    }
    
}
