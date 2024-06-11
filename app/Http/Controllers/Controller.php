<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

abstract class Controller
{
    public function yourMethod()
    {

    }

    public function convertVariable(Request $request)
    {
        $javascriptVariable = $request->input('javascript_variable');

        // Do any processing or manipulation of the JavaScript variable here
        // For example, you could convert it to uppercase
        $phpVariable = strtoupper($javascriptVariable);
    
        // Return a response containing the PHP variable back to the client-side JavaScript
        return response()->json(['php_variable' => $phpVariable]);

    }
}
