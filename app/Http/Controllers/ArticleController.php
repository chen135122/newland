<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ArticleController extends Controller
{
    public function index()
    {

        $articles = Article::where('picurl','<>', '')->orderBy('displayorder', 'desc')->paginate(10);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        return view('article.index')->with(compact('articles','Lastedarticle','hotpropertys'));

    }

    public function show($id)
    {
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $article = Article::where('id', $id)->first();
        $prev= Article::where('id', '<',$id)->select('id', 'title')->orderBy('id', 'desc')->first();
        $next= Article::where('id', '>', $id)->select('id', 'title')->first();

        return view('article.show')->with(compact('article','prev','next','Lastedarticle','hotpropertys'));
    }
    //最新资讯
    public function LastedNews($n)
    {
        $article= Article::orderBy('displayorder', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::orderBy('id', 'desc')->take($n)->select('id', 'title','picurl','address')->get();
        return $property;
    }

}
