<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = new ArticleController();
        $article = $articles->getArticle();
//        dd($article);
        return view('home', ['articles' => $article]);
    }

    public function getRoutePath()
    {
        $route = \request()->route('uri');
        return $route;
    }
}
