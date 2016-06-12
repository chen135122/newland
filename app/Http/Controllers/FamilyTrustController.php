<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;
use Overtrue\Wechat\QRCode;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class FamilyTrustController extends Controller
{
    public function index()
    {

        $models = Partner::orderBy('displayorder', 'desc')->where("iswork",1)->paginate(10);
        $allUrl= $this->qrcode();
        return view('trust.index')->with(compact('models','allUrl'));
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
        $model = Partner::where('id', $id)->first();
        $allUrl= $this->qrcode();
        return view('trust.show')->with(compact('model','allUrl'));
    }

}
