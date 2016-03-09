<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
//        $articles = Article::where('catid', 21);
//        $articles = Article::all();
//        $articles=$articles->paginate(10);

        $articles = Article::orderBy('id', 'desc')->paginate(10);

        $Lastedarticle=$this->LastedNews(5);
        return view('article.index')->with(compact('articles','Lastedarticle'));


    }

    public function show($id)
    {

        $article = Article::where('id', $id)->first();
        $prev= Article::where('id', '<',$id)->select('id', 'title')->orderBy('id', 'desc')->first();
        $next= Article::where('id', '>', $id)->select('id', 'title')->first();
        $Lastedarticle=$this->LastedNews(5);
        return view('article.show')->with(compact('article','prev','next','Lastedarticle'));
    }

    public function LastedNews($n)
    {
        $article= Article::orderBy('id', 'desc')->take($n)->select('id', 'title','picurl')->get();

//        DB::table('users')->skip(10)->take(5)->get();
//        $article= Article::get()->take($n)->orderBy('id', 'desc');
        return $article;
    }
}
