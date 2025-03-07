<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function liste(){
        $articles= Articles::all();

        //dd($articles);

        return view("client.articles",[
            'articles'=>$articles
        ]);
    }

    public function details(string $slug)
    {
        //dd($slug);

        $article = Articles::where('slug', '=', $slug)->first();
        return view("client.articles-show", [
            'article' => $article
        ]);
    }
}
