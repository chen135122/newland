<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ArticleController extends Controller
{
    public function index()
    {

    //        $articles = Article::where('status',1)->where('picurl','<>', '')->orderBy('displayorder', 'desc')->paginate(10);
        $articles = Article::where('status',1)->where('picurl','<>', '')->orderBy('id', 'desc')->paginate(10);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        return view('article.index')->with(compact('articles','Lastedarticle','hotpropertys'));

    }

    public function index_type($type)
    {
        //        $articles = Article::where('status',1)->where('picurl','<>', '')->orderBy('displayorder', 'desc')->paginate(10);
        $articles = Article::where('status',1)->where('catid',$type)->where('picurl','<>', '')->orderBy('id', 'desc')->paginate(10);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $typename=ArticleCategory::where('id',$type)->pluck('name')->first();

        return view('article.index_type')->with(compact('articles','Lastedarticle','hotpropertys','type','typename'));

    }

    public function show($id)
    {
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $article = Article::where('status',1)->where('id', $id)->first();
        $prev= Article::where('status',1)->where('id', '<',$id)->select('id', 'title')->orderBy('id', 'desc')->first();
        $next= Article::where('status',1)->where('id', '>', $id)->select('id', 'title')->first();

        return view('article.show')->with(compact('article','prev','next','Lastedarticle','hotpropertys'));
    }
    //最新资讯
    public function LastedNews($n)
    {
        $article= Article::where('status',1)->orderBy('displayorder', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::where('status',1)->orderBy('id', 'desc')->take($n)->select('id', 'title','picurl','address')->get();
        return $property;
    }

}
