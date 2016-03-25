<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use App\Models\TravelDay;
use App\Models\TravelCategory;
use App\Models\newOrder;
use App\Models\priceBase;
use App\Models\priceRange;
use App\Models\orderDetail;
use App\Models\Image;
use Carbon\Carbon;
use Omnipay;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index(Request $request)
    {

        $travels=Travel::where("id",">",0);

        $category=$request->get('category');
        $price=$request->get('price');
        if (!empty($price)){
            $travels= $travels->whereBetween('referenceprice', $price);
        }
        else{
            $category=[];
        }
        if (!empty($category)){
                $travels= $travels->WhereIn('catid', $category);
        }
       if($sortprice = request()->get('sortPrice'))
       {
           if($sortprice=="higher")
           {
               $travels= $travels->orderBy("referenceprice","desc")->paginate(5)->appends(['sortPrice' => 'higher']);
           }
           else{
               $travels = $travels->orderBy("referenceprice","asc")->paginate(5)->appends(['sortPrice' => 'lower']);
           }
       }
        else
        {
        $travels=$travels->orderBy("created_at","desc")->paginate(5);
        }
        $travelCategorys = TravelCategory::where('parentid',0)->where("name","like",'%'.'旅游'.'%')->first();
        $categorys=TravelCategory::all()->where("parentid",$travelCategorys->id);
        $maxprice=Travel::where("id",">",0)->orderBy("referenceprice","desc")->first()->referenceprice;
        if (!empty($price)){
            $minprice=$price[0];
            $toprice=$price[1];
        }
        else{
            $minprice=0;
            $toprice=$maxprice;
        }

        return view('tour.index')->with(compact('travels'))->with(compact('categorys'))->with(compact('category'))
            ->with("maxprice",$maxprice)->with("minprice",$minprice)->with("toprice",$toprice);
    }

    public function show($id)
    {
        $travel = Travel::where('id', $id)->first();
        $travelDay=$travel->day()->get(); //TravelDay::where("route_id",$travel->id);
        //$travelFeature=$travel->feature()->get();
        $pic=$travel->travelImg()->get()->where("smalltype",1);
        //$pic=$pic::all()->where(['type'=>1]);
        return view('tour.show')->with(compact('travel'))->with(compact("travelDay",$travelDay))->with(compact('pic'));
            //->with(compact("travelFeature",$travelFeature));
    }
    public function order(Request $request)
    {
        $perNum=$request->get("num");
        if(!empty( $route=$request->get("routid")))
        {
            $travel=Travel::where("id",$route)->first();
            $priceRange=priceRange::where("routeid",$route)->where("endnum",">",$perNum)->where("startnum","<",$perNum);
        }

       $priceBase= priceBase::all()->sortByDesc("displayorder");
        //$route=$request->get("routid");

        return view('tour.order')->with(compact("travel",$travel))->with(compact("priceBase",$priceBase))
            ->with("perNum",$perNum)->with("route",$route)->with("name",$travel->bigtitle);
    }

    public function create(Request $request)
    {
        try{
            $travel=Travel::where("id",get("rout"))->first();
            $order=new newOrder();
            $order->itemid=$request->get("rout");
            $order->uid=1;
            $order->sn=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);;
            //$order->startdate=Carbon::now();
           // $order->children=0;
            $order-> totalprice=($travel->referenceprice);
            //$order-> discount=0.0;
            $order-> orderprice=$travel->oprice;
            //$order-> oprice=0.0;
            $order->type=1;
            $order->paytype=3;
            $order-> created_at=Carbon::now();
            $order-> created_by=1;
            $order->adults=strval($request->get("perNum"));
            $order->username=strval($request->get("username")) ;
            $order->phone=strval($request->get("userPhone"));
            $order->email=strval($request->get("userEmail"));
            $order->remark=strval($request->get("content"));
//            $order->updated_at=Carbon::now();
//            $order->paytime=null;
//            $order->transid="12";
            $order->save();
            if($order->id>0)
            {
                $orderDetail=new orderDetail();
                $orderDetail->orderid=$order->id;
                $orderDetail->title=$travel->title;
               // $orderDetail->price=
                $orderDetail->num=$request->get("perNum");
            }
            return  $order->sn;
        }
        catch(Exception $e)
        {
            return 0;
        }
        return 0;
    }
    public function pay()
    {
        return view('tour.pay');
    }
    public function tprint($id)
    {
        $order=newOrder::where("id",$id)->first();
        $orderDetail=$order->detail()->get();
        $travel=$order->travel()->get()->first();
        return view('tour.tprint')->with(compact("order",$order))->with(compact("travel",$travel))->with(compact("orderDetail",$orderDetail));
    }
    public function result(Request $request)
    {
        $trade_no= $request->get("out_trade_no");
       if(!empty( $request->get("trade_status"))&&$request->get("buyer_id")=="2088202430037100")
       {
        $gateway = Omnipay::gateway();
        $options = [
            'request_params'=> $_REQUEST,
        ];

        $response = $gateway->completePurchase($options)->send();
           $upOrder= newOrder::where("sn",$trade_no)->first();
        if (($response->isSuccessful() && $response->isTradeStatusOk())||($request->get("is_success")=="T")) {
            //支付成功后操作
            $msg="支付成功";
            $upOrder->status=2;

        } else {
            //支付失败通知.
            $msg="失败";
            $upOrder->status=5;

        }
           $upOrder->save();
       }
        else{
            $upOrder= newOrder::where("sn",$trade_no)->first();
            if ($request->get("type")=="1") {
                //支付成功后操作
                $msg="支付成功";
                $upOrder->status=2;

            } else {
                //支付失败通知.
                $msg="失败";
                $upOrder->status=5;

            }
            $upOrder->save();
        }
        $order=newOrder::where("sn",$trade_no)->first();
        $travel=$order->travel()->get()->first();
        $paytype="";
        switch ($order->paytype)
        {
            case 1:$paytype="线下现金";break;
            case 2:$paytype="支付宝";break;
            case 3:$paytype="微信";break;
            case 4:$paytype="对公账号";break;
        }
        return view('tour.result')->with(compact("order",$order))->with(compact("travel",$travel))->with("msg",$msg)->with("paytype",$paytype);;
    }
}
class toInt
    {
    public static  function del0($num){
        return "".intval($num);
    }
    //单个数字变汉字
    public static function  n2c($x){
        $arr_n = array("零","一","二","三","四","五","六","七","八","九","十");
        return $arr_n[$x];
    }
    //读取数值（4位）
    public static  function num_r($abcd)
    {
        $arr= array();
        $str = ""; //读取后的汉字数值
        $flag = 0; //该位是否为零
        $flag_end = 1; //是否以“零”结尾
        $size_r = strlen($abcd);
        for($i=0; $i<$size_r; $i++){
            $arr[$i] = $abcd{$i};
        }
        $arrlen = count($arr);
        for($j=0; $j<$arrlen; $j++){
            $ch = n2c($arr[$arrlen-1-$j]); //从后向前转汉字
            if($ch == "零" && $flag == 0){ //如果是第一个零
                $flag = 1; //该位为零
                $str = $ch.$str; //加入汉字数值字符串
                continue;
            }elseif($ch == "零"){ //如果不是第一个零了
                continue;
            }
            $flag = 0; //该位不是零
            switch($j) {
                case 0: $str = $ch; $flag_end = 0; break; //第一位（末尾），没有以“零”结尾
                case 1: $str = $ch."十".$str; break; //第二位
                case 2: $str = $ch."百".$str; break; //第三位
                case 3: $str = $ch."千".$str; break; //第四位
                case 4: $str = $ch."万".$str; break; //第五位
                case 5: $str = $ch."十".$str; break; //第六位
                case 6: $str = $ch."百".$str; break; //第七位
                case 7: $str = $ch."千".$str; break; //第八位
            }
        }
        //如果以“零”结尾
        if($flag_end == 1) {
            mb_internal_encoding("UTF-8");
            $str = mb_substr($str, 0, mb_strlen($str)-1); //把“零”去掉
        }
        return $str;
    }
    public static  function num2ch($num) //整体读取转换
    {
        $num_real = del0($num);//去掉前面的“0”
        $numlen = strlen($num_real);
        echo "numlen=".$numlen."";
        if($numlen >= 9)//如果满九位，读取“亿”位
        {
            $y=substr($num_real, -9, 1);
            //echo $y;
            $wsbq = substr($num_real, -8, 4);
            $gsbq = substr($num_real, -4);
            $a = num_r(del0($gsbq));
            $b = num_r(del0($wsbq))."万";
            $c = num_r(del0($y))."亿";
        }elseif($numlen <= 8 && $numlen >= 5) //如果大于等于“万”
        {
            $wsbq = substr($num_real, 0, $numlen-4);
            $gsbq = substr($num_real, -4);
            $a = num_r(del0($gsbq));
            $b = num_r(del0($wsbq))."万";
            $c="";
        }elseif($numlen <= 4) //如果小于等于“千”
        {
            $gsbq = substr( $num_real, -$numlen);
            $a = num_r(del0($gsbq));
            $b="";
            $c="";
        }
        $ch_num = $c.$b.$a;
        return $ch_num;
    }
    }