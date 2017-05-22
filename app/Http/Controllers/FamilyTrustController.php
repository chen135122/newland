<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;
use Overtrue\Wechat\QRCode;
use App\Http\Requests;
use App\Models\Property;
use App\Http\Controllers\Controller;
class FamilyTrustController extends Controller
{
    public function index()
    {
        $models = Partner::orderBy('displayorder', 'asc')->where("iswork", 3)->paginate(10);
        $allUrl= $this->qrcode();
        $hotpropertys=$this->HotProperty(4);
        return view('trust.index')->with(compact('models','allUrl','hotpropertys'));
    }


    public  function  qrcode(){
        $appId  = 'wxbf7a6d0b392ce5db';
        $secret = 'dd1b309aef23dfd916867a21688ba4ea';
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
        $model = Partner::where('id', $id)->first();
        $allUrl= $this->qrcode();
        $hotpropertys=$this->HotProperty(4);
        return view('trust.show')->with(compact('model','allUrl','hotpropertys'));
    }
    //热门房产
    public function HotProperty($n,$id=null)
    {
        if($id!=null)
            $property= Property::where('publish','1')->where('ishot',1)->where('status', '<>', 10)->where('status', '<>', 14)->where('id', '<>', $id)->orderBy('created_at', 'asc')->take($n)->select('id', 'title','picurl','address','tagsid')->get();
        else
            $property= Property::where('publish','1')->where('ishot',1)->where('status', '<>', 10)->where('status', '<>', 14)->orderBy('created_at', 'asc')->take($n)->select('id', 'title','picurl','address','tagsid')->get();

        return $property;
    }
}
