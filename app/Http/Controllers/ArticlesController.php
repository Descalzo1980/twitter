<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => 'index']);
    }
   public function index()
   {

       $articles = Article::latest('published_at')->published()->get();

       return view('articles.index', compact('articles'));
   }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    /**
     * так же возможен вариант с вызовом класса Illuminate/Http/Request
     * $this->validate($request, ['title' => 'required', 'body' =>'required']);
     * @param CreateArticle $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {

        Article::create($request->all());

        return redirect('articles');

    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
