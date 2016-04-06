<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Travel;
use Cookie;
use Session;
use Illuminate\Http\Request;
use App\User;
use Overtrue\Wechat\QRCode;
use Overtrue\Wechat\Url;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $hotpropertys=$this->HotProperty(3);
        $travels=$this->Hottravels(6);
        $HouseCount = Property::where('status', '<>', 0)->where('status', '<>', 4)->count();
        $travelsCount = Travel::count();
        $allUrl=$this->url();
        return view('home.index')->with(compact('hotpropertys','HouseCount','travels','travelsCount','allUrl'));
    }

    public function faq()
    {
        $allUrl=$this->url();
        return view('home.faq')->with(compact('allUrl'));
    }
    public function about()
    {
        $allUrl=$this->url();
        return view('home.about')->with(compact('allUrl'));
    }
    public  static  function url()
    {
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
    //热门旅游
    public function Hottravels($n)
    {
        $models= Travel::take($n)->select('id', 'title','bigtitle','picurl','referenceprice')->get();
        return $models;
    }

    //热门房产
    public function HotProperty($n)
    {
        $property = Property::where('status', '<>', 0)->where('status', '<>', 4);
        $property= $property->take($n)->select('id', 'title','picurl','total_price')->get();
        return $property;
    }
}
