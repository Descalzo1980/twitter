<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;


class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show']]);
    }

   public function index()
   {

       $articles = Article::latest('published_at')->published()->get();

       return view('articles.index', compact('articles'));
   }

    /**
     * @param Article $article
     * @return Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::lists('name');
        return view('articles.create', compact('tags'));
    }

    /**
     * так же возможен вариант с вызовом класса Illuminate/Http/Request
     * $this->validate($request, ['title' => 'required', 'body' =>'required']);
     * @param CreateArticle $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {

        $article = new Article($request->all());
//Толя прислал
//        $article->user_id = Auth::id();
//
//        $article->save();
        Auth::user()->articles()->save($article);

        return redirect('articles');

    }

    /**
     * @param Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }
}
