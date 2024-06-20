<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class articles extends Controller
{
    //
    
    public function createArticle(Request $request)
    {


        $newArticle = new article();
        $newArticle->title = $request->input('title');

        $newArticle->featured = $request->boolean('featured');


        $newArticle->description = $request->input('description');
        $newArticle->img = $request->input('img');


        // $newArticle->description = $request->input('img');

        // return view('upload-article');
        $newArticle->save();
        return view('upload-article');

        // return response()+json(['message' => 'Created article succefully'], 201);


    }
    public function deleteArticle(Request $request, $id)
    {

        dd($request);
        $article = article::find($id);

        if ($article) {

            $article->delete();
            // TODO Change it  so it  views the dashboard.
            return redirect()->json(['message' => 'Succesfully deleted article' . $id]);
        }
    }
    public function displayInformation()
    {
        return view('article-editor', ['articles' => article::all()]);

    }
    public function update()
    {

    }

public function commentsSection() {

    
}    


}
