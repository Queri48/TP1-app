<?php

namespace App\Http\Controllers\admin;

use App\Models\Articles;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class ArticleController extends Controller
{
    public function liste()
    {
        $articles = Articles::all();

        return view('admin.articles.list', [
            'articles' => $articles
        ]);
    }

    public function ajouter()
    {
        $categories = Categorie::all();

        return view('admin.articles.create', [
            'categories' => $categories
        ]);
    }

    public function ajouter_traitement(Request $request)
    {
        //dd($request->all());
        Articles::create([
            'titre' => $request->titre,
            'image' => $request->image,
            'resume' => $request->resume,
            'categorie_id' => $request->categorie_id,
            'description' => $request->description,
            'tags' => $request->tags,
            'slug' => Str::slug(date('Y-m-d') . '-' . $request->slug)
        ]);
        return redirect()->route('admin.articles.ajouter');
    }

    public function modifier($id)
    {
        $articles = Articles::findOrFail($id);
        $categories = Categorie::all();

        return view('admin.articles.edit', [
            'article' => $articles,
            'categorie' => $categories
        ]);
    }

    public function modifier_traitement(Request $request, $id)
{
    $article = Articles::findOrFail($id);
    $article->titre = $request->article_titre;
    $article->resume = $request->article_resume;
    $article->description = $request->article_description;
    $article->tags = $request->article_tags;
    $article->slug = Str::slug(date('Y-m-d') . '-' . $request->article_slug);
    $article->categorie_id = $request->article_categorie_id;
    $article->save();


    $categorie = Categorie::findOrFail($article->categorie_id);
    $categorie->titre = $request->categorie_titre;
    $categorie->save();

    return redirect()->route('admin.articles.liste')->with('success', 'Article et catégorie mis à jour avec succès.');
}

    public function detail()
    {
        return view('admin.articles.show');
    }
}
