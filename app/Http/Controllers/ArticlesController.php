<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller {
    public function index()
    {
        $articles = Article::paginate(5);
        return view('article.index', compact('articles'));
    }

    public function show($articleId)
    {
        $article = Article::findOrFail($articleId);
        return view('article.show', compact('article'));
    }
}
