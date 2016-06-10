<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Article;
use App\Models\Region;
use Illuminate\Http\Request;
use Overtrue\Wechat\QRCode;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\NewOrder;
use App\Models\OrderDetail;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::where('publish','1')->where('status', '<>', 10)->where('status', '<>', 14);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $properties=$properties->orderBy("created_at","desc")->paginate(5);
        $allUrl= $this->qrcode();
        return view('property.index')->with(compact('properties','Lastedarticle','hotpropertys','allUrl'));
    }

    public function show($id)
    {
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $property = Property::where('id', $id)->where('status', '<>', 10)->where('status', '<>', 14)->first();
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
        $house_details=\App\Models\Infor::select('title', 'content')->get();
        $zixun='';$anfang='';$qingsao='';$daizu='';$xintuo='';$liucheng='';
        foreach($house_details as $house_detail){
            if($house_detail->title=="咨询我们"){
                $zixun=$house_detail->content;
            }
            if($house_detail->title=="安防服务"){
                $anfang=$house_detail->content;
            }
            if($house_detail->title=="清扫服务"){
                $qingsao=$house_detail->content;
            }
            if($house_detail->title=="代租服务"){
                $daizu=$house_detail->content;
            }
            if($house_detail->title=="家庭信托"){
                $xintuo=$house_detail->content;
            }
            if($house_detail->title=="购置流程"){
                $liucheng=$house_detail->content;
            }
        }

        return view('property.show')->with(compact('property','locationX','locationY','Lastedarticle','hotpropertys','pic','allUrl','zixun','anfang','qingsao','daizu','xintuo','liucheng'));
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
        $article= Article::where('publish','1')->where('ishot',1)->orderBy('displayorder', 'desc')->orderBy('created_at', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::where('publish','1')->where('ishot',1)->where('status', '<>', 10)->where('status', '<>', 14)->orderBy('created_at', 'desc')->take($n)->select('id', 'title','picurl','address')->get();
        return $property;
    }

    public function order(Request $request)
    {
        if (!empty($houseid = $request->get("houseid"))) {
            $property = Property::where('publish','1')->where('status', '<>', 10)->where('status', '<>', 14)->where("id", $houseid)->first();
       } else {
            return view('errors.404');
        }
        $login=false;
        if(auth()->user())
            $login=true;
        return view('property.order')->with(compact("property","houseid"))
            ->with(["name"=>$property->title,"login"=>auth()->check()]);
    }

    public function create(Request $request)
    {
        try {
            $property = Property::where("id", get("houseid"))->first();
            $order = new NewOrder();
            $order->itemid = $request->get("houseid");
            $order->uid = 1;
            $order->sn = date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);;
            $order->totalprice =$property->total_price;
            $order->orderprice = 0;
            $order->type = 2;
            $order->paytype = 3;
            $order->created_at = Carbon::now();
            $order->created_by = 1;
            $order->adults = 0;
            $order->username = strval($request->get("username"));
            $order->phone = strval($request->get("userPhone"));
            $order->email = strval($request->get("userEmail"));
            $order->remark = strval($request->get("content"));
//            $order->updated_at=Carbon::now();
//            $order->paytime=null;
//            $order->transid="12";
            $order->save();
            if ($order->id > 0) {
                $orderDetail = new OrderDetail();
                $orderDetail->orderid = $order->id;
                $orderDetail->title = $property->title;
                // $orderDetail->price=
                $orderDetail->num = 0;
            }
            return $order->sn;
        } catch (Exception $e) {
            return 0;
        }
        return 0;
    }
    public function result(Request $request)
    {
        $property = Property::where("id", $request->get("houseid"))->first();
        $num=0;
//        $travel=Travel::where("id",$request->get("rout"))->first();
        $order=new NewOrder();
        $order->itemid=$request->get("houseid");
        $order->uid=auth()->user()->id;
        $order->sn=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);;
        //$order->startdate=Carbon::now();
        // $order->children=0;
        $order-> totalprice=0;
        //$order-> discount=0.0;
        $order-> orderprice=0;
        $order-> status=1;
        $order->type=2;
        $order->paytype=3;
//        $order-> created_at=Carbon::now();
        $order-> created_by=1;
        $order->num=$num;
        $order->username=strval($request->get("username")) ;
        $order->phone=strval($request->get("userPhone"));
        $order->email=strval($request->get("userEmail"));
        $order->remark=strval($request->get("content"));
//        $order->start_time=$request->get("startDate");
        $order->save();
        if($order->id>0)
        {


                    $orderDetail = new OrderDetail();
                    $orderDetail->orderid = $order->id;
                    $orderDetail->title = $property->title;
                    $orderDetail->price = $property->total_price;
                    $orderDetail->num = $num;
//                    $orderDetail->created_at = Carbon::now();
                    $orderDetail->created_by = 1;
//                    $orderDetail->updated_at = null;
                    $orderDetail->updated_by = null;
                    $orderDetail->save();
            $subject=  $request->get("subject");
        }
        else
            return redirect($request->get("url"));
        $trade_no = $order->sn;
        $upOrder = NewOrder::where("sn", $trade_no)->first();

        $upOrder->status =1;
        $upOrder->save();
        $order = NewOrder::where("sn", $trade_no)->first();
        $paytype = "";
//        $paytype= $this->paytype($order->paytype);
        return view('property.result')->with(compact("order", $order))->with(compact("property", $property))->with("msg","未支付")->with("paytype", $paytype);;
    }
    public function tprint($id)
    {
        $order = NewOrder::where("id", $id)->first();
        $orderDetail = $order->detail()->get();
        $property =Property::where("id", $order->itemid)->first();
        return view('property.tprint')->with(compact("order","property","orderDetail"));
    }
}
