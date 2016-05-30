<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Article;
use App\Models\Region;
use Illuminate\Http\Request;
use Overtrue\Wechat\QRCode;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::where('status', '<>', 0)->where('status', '<>', 4);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $properties=$properties->orderBy("id","desc")->paginate(5);
        $allUrl= $this->qrcode();
        return view('property.index')->with(compact('properties','Lastedarticle','hotpropertys','allUrl'));
    }

    public function show($id)
    {
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $property = Property::where('id', $id)->first();
        $locationArray=explode(',',$property->location);

        $pic=$property->propertyImg()->get();
        if(count($locationArray)==2){
            $locationX=$locationArray[0];
            $locationY=$locationArray[1];
        }
        else{
            $locationX=-45.023564;
            $locationY=168.9689589;
        }
        $allUrl= $this->qrcode();
        return view('property.show')->with(compact('property','locationX','locationY','Lastedarticle','hotpropertys','pic','allUrl'));
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
    //最新资讯
    public function LastedNews($n)
    {
        $article= Article::where("id",">","0")->orderBy('displayorder', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::orderBy('id', 'desc')->take($n)->select('id', 'title','picurl','address')->get();
        return $property;
    }
}
