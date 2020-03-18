<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // all private functions are here
    private function validated()
    {
        return \request()->validate([
            'title' => 'required|max:255',
            'user_id' => 'required',
            'body' => 'required',
        ]);
    }

    private function validTags()
    {
        return request()->validate([
            'tags' => 'required|exists:tags,id'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return some articles
        if (\request('tag')){
            $articles = Tag::where('name', \request('tag'))->firstOrFail()->articles;
        }
        else{
            $articles = Article::latest()->get();
        }
        return view('article',['articles'=>$articles]);
    }

    public function getArticle()
    {
        $article = Article::take(6)->latest()->get();
        return $article;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return create view
        return view('article.create', [ 'tags' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags = $this->validTags();
        $article = new Article($this->validated());
        $article->author = User::where('id',$article->user_id)->first()->name;
        $article->save();

        $article->tags()->attach($request['tags']);

        return redirect(route('articles'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //the wildcard is important: should be the same as that of the route $id => {id}
        // return a requested article
//        dd(compact('article'));
        return view('article.show', ['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //return edit view
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
