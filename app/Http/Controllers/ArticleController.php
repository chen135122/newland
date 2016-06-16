<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Overtrue\Wechat\QRCode;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ArticleController extends Controller
{
    public function index()
    {

    //        $articles = Article::where('status',1)->where('picurl','<>', '')->orderBy('displayorder', 'desc')->paginate(10);
        $articles = Article::where('publish',1)->orderBy('displayorder', 'desc')->paginate(10);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $allUrl= $this->qrcode();
        return view('article.index')->with(compact('articles','Lastedarticle','hotpropertys','allUrl'));

    }

    public function index_type($type)
    {
        //        $articles = Article::where('status',1)->where('picurl','<>', '')->orderBy('displayorder', 'desc')->paginate(10);
        $articles = Article::where('publish',1)->where('catid',$type)->where('picurl','<>', '')->orderBy('id', 'desc')->paginate(10);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $typename=ArticleCategory::where('id',$type)->pluck('name')->first();
        $allUrl= $this->qrcode();
        return view('article.index_type')->with(compact('articles','Lastedarticle','hotpropertys','type','typename','allUrl'));

    }
    public  function  qrcode(){
        $appId  = 'wxcf1588ee73525cea';
        $secret = '2d2e236464875cea7218559df7965b23';
        $mchid = '1287337101';
        //商户支付密钥Key。审核通过后，在微信发送的邮件中查看
        $key = 'hpr825QaxxKQ9Ms3IhjQdsw8vnDl1w9s';
        $qrcode = new QRCode($appId, $secret);
        $result = $qrcode->temporary(56, 6 * 24 * 3600);

        $ticket = $result->ticket;// 或者 $result['ticket']
        $expireSeconds = $result->expire_seconds; // 有效秒数
        $url = $result->url; // 二维码图片解析后的地址，开发者可根据该地址自行生成需要的二维码图片
        $allUrl=$qrcode->show($ticket);
        return $allUrl;
    }
    public function show($id)
    {
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $article = Article::where('publish',1)->where('id', $id)->first();
        $prev= Article::where('publish',1)->where('id', '<',$id)->select('id', 'title')->orderBy('id', 'desc')->first();
        $next= Article::where('publish',1)->where('id', '>', $id)->select('id', 'title')->first();
        $allUrl= $this->qrcode();
        return view('article.show')->with(compact('article','prev','next','Lastedarticle','hotpropertys','allUrl'));
    }
    //最新资讯
    public function LastedNews($n)
    {
        $article= Article::where(['publish'=>1,'ishot'=>1])->orderBy('displayorder', 'desc')->orderBy('created_at', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::where(['publish'=>1,'ishot'=>1])->where('status', '<>', 10)->where('status', '<>', 14)->orderBy('created_at', 'desc')->take($n)->select('id', 'title','picurl','address','tagsid')->get();
        return $property;
    }

}
