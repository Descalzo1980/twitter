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
        $tags = Tag::lists('name', 'id');

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

        Auth::user()->articles()->save($article);

        $article->tags()->attach($request->input('tag_list'));

        return redirect('articles');

    }

    /**
     * @param Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
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
