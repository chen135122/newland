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
        $parames=[];
        $properties = Property::where('status', '<>', 0)->where('status', '<>', 4);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $price=$request->get('price');
        $rid = request()->get('rid');  //一级地区
        $cid= request()->get('cid'); //二级地区
        $did= request()->get('did'); //三级地区
        $type= request()->get('type'); //房屋类型
        if (!empty($type)&&$type!=0){
            $properties= $properties->where('type', $type);
            $parames["type"]=$type;
        }
        if (!empty($price)){
            $properties= $properties->whereBetween('total_price', $price);
            $parames["price"]=$price;
        }
        $regionlist=Region::where('parent_id', 0)->get();
        if (!empty($rid)){

            $properties= $properties->where('region', $rid);
            $regionclist=Region::where('parent_id', $rid)->get();
            if(empty($cid)) {
                $cid = $regionclist->first()->id;
                $regiondlist = Region::where('parent_id', $cid)->get();
            }
            $parames["rid"]=$rid;
        }

        if (!empty($cid)){
            $properties= $properties->where('city', $cid);
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
            $parames["cid"]=$cid;
          }

        if (!empty($did)){
            $properties= $properties->where('district', $did);
            $cid=Region::find($did)->parent_id;
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
            $parames["did"]=$did;
         }


        $maxprice=Property::max('total_price');
        if (!empty($price)){
            $minprice=$price[0];
            $toprice=$price[1];
        }
        else{
            $minprice=0;
            $toprice=$maxprice;
        }


        if($sortprice = request()->get('sortPrice'))
        {
            if($sortprice=="higher")
            {
                $parames["sortPrice"]='higher';
                $properties= $properties->orderBy("total_price","desc")->paginate(5)->appends($parames);
            }
            else{
                $parames["sortPrice"]='lower';
                $properties =$properties->orderBy("total_price","asc")->paginate(5)->appends($parames);
            }
        }
        else
        {
            $properties=$properties->orderBy("id","desc")->paginate(5)->appends($parames);
        }
        $allUrl= $this->qrcode();
        return view('property.index')->with(compact('properties','maxprice','minprice','toprice','regionlist','regionclist','regiondlist','rid','cid','did','type','Lastedarticle','hotpropertys','allUrl'));
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
        $article= Article::where('status',1)->orderBy('displayorder', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::orderBy('id', 'desc')->take($n)->select('id', 'title','picurl','address')->get();
        return $property;
    }
}
