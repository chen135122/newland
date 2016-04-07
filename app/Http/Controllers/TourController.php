<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\TravelDay;
use App\Models\TravelCategory;
use App\Models\NewOrder;
use App\Models\PriceBase;
use App\Models\PriceRange;
use App\Models\OrderDetail;
use App\Models\Property;
use App\Models\Article;
use App\Models\Image;
use Carbon\Carbon;
use Overtrue\Wechat\QRCode;
use Omnipay;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index(Request $request)
    {
        $parames=[];
        $travels = Travel::where("id", ">", 0)->orderBy("displayorder","asc");
        $travels = $travels->where("status",1);
        $category=[];
        if(!empty($request->get('category')))
        {
        $category = explode("_", $request->get('category'));
        }
        if(!empty($request->get('price')))
        {
        $price = explode("_", $request->get('price'));// $request->get('price');
        }
        if (!empty($sortprice =request()->get('sortPrice'))) {
            if ($sortprice == "2") {
                $travels = $travels->orderBy("referenceprice", "desc");
            } else if ($sortprice == "1") {
                $travels = $travels->orderBy("referenceprice", "asc");
            } else {
                $travels = $travels->orderBy("created_at", "desc");
            }
            $parames["sortPrice"]=request()->get('sortPrice');
        } else {
            $travels = $travels->orderBy("created_at", "desc");
        }

        if (!empty($request->get('price'))) {
            $travels = $travels->whereBetween('referenceprice', $price);
            $parames["price"]=$request->get('price');
        }
        if ($request->get('category')) {
            $travels = $travels->WhereIn('catid', $category);
            $parames["category"]=$request->get('category');
        }

        $travels=$travels->paginate(5)->appends($parames);
        $travelCategorys = TravelCategory::where('parentid', 0)->where("name", "like", '%' . '旅游' . '%')->first();
        $categorys = TravelCategory::all()->where("parentid", $travelCategorys->id);
        $maxprice = Travel::where("id", ">", 0)->orderBy("referenceprice", "desc")->first()->referenceprice;
        if (!empty($price)) {
            $minprice = $price[0];
            $toprice = $price[1];
        } else {
            $minprice = 0;
            $toprice = $maxprice;
        }
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
        $rand= random_int(0,count($travels)-1);
        return view('tour.index')->with(compact('travels'))->with(compact('categorys'))->with(compact('category'))
            ->with(["maxprice" => $maxprice, "minprice" => $minprice, "toprice" => $toprice, "sortprice" => $sortprice,'allUrl'=>$allUrl,'rand'=>$rand]);

    }

    public function show($id)
    {
        $Lastedarticle = $this->LastedNews(5);
        $hotpropertys = $this->HotProperty(4);

        $travel = Travel::where('id', $id)->first();
        if (empty($travel))
            return view('home.index');
        $travelDay = $travel->day()->get(); //TravelDay::where("route_id",$travel->id);
        //$travelFeature=$travel->feature()->get();
        $pic = $travel->travelImg()->get()->where("smalltype", 1);
        //$pic=$pic::all()->where(['type'=>1]);
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
        return view('tour.show')->with(compact('travel'))->with(compact("travelDay", $travelDay))->with(compact('pic','allUrl'))
            ->with(compact('Lastedarticle', $Lastedarticle))->with(compact('hotpropertys', $hotpropertys));
        //->with(compact("travelFeature",$travelFeature));
    }

    public function LastedNews($n)
    {
        $article = Article::where('status', 1)->orderBy('displayorder', 'desc')->take($n)->select('id', 'title', 'picurl', 'abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property = Property::orderBy('id', 'desc')->take($n)->select('id', 'title', 'picurl', 'address')->get();
        return $property;
    }

    public function order(Request $request)
    {
        $perNum = $request->get("num");
        $date = $request->get("date");

        if (!empty($route = $request->get("routid"))) {
            $travel = Travel::where("id", $route)->first();
            $priceRange = PriceRange::where("routeid", $route)->where("endnum", ">", $perNum)->where("startnum", "<", $perNum);
        } else {
            return view('errors.404');
        }

        $priceBase = PriceBase::orderBy("displayorder")->get();
        $login=false;
        if(auth()->user())
            $login=true;
        return view('tour.order')->with(compact("travel", "priceBase", "perNum", "route"))
            ->with(["name"=>$travel->bigtitle,"login"=>$login,"date"=>$date]);
    }

    public function create(Request $request)
    {
        try {
            $travel = Travel::where("id", get("rout"))->first();
            $order = new NewOrder();
            $order->itemid = $request->get("rout");
            $order->uid = 1;
            $order->sn = date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);;
            //$order->startdate=Carbon::now();
            // $order->children=0;
            $order->totalprice = ($travel->referenceprice);
            //$order-> discount=0.0;
            $order->orderprice = $travel->oprice;
            //$order-> oprice=0.0;
            $order->type = 1;
            $order->paytype = 3;
            $order->created_at = Carbon::now();
            $order->created_by = 1;
            $order->adults = strval($request->get("perNum"));
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
                $orderDetail->title = $travel->title;
                // $orderDetail->price=
                $orderDetail->num = $request->get("perNum");
            }
            return $order->sn;
        } catch (Exception $e) {
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
        $order = NewOrder::where("id", $id)->first();
        $orderDetail = $order->detail()->get();
        $travel = $order->travel()->get()->first();
        return view('tour.tprint')->with(compact("order", $order))->with(compact("travel", $travel))->with(compact("orderDetail", $orderDetail));
    }

    public function result(Request $request)
    {
        $trade_no = $request->get("out_trade_no");
        if (!empty($request->get("trade_status"))) {
            $gateway = Omnipay::gateway();
            $options = [
                'request_params' => $_REQUEST,
            ];

            $response = $gateway->completePurchase($options)->send();
            $upOrder = NewOrder::where("sn", $trade_no)->first();
            if (($response->isSuccessful() && $response->isTradeStatusOk()) || ($request->get("is_success") == "T")) {
                //支付成功后操作
                $msg = "支付成功";
                $upOrder->status = 2;

            } else {
                //支付失败通知.
                $msg = "失败";
                $upOrder->status = 5;

            }
            $upOrder->save();
        } else {
            $upOrder = NewOrder::where("sn", $trade_no)->first();
            if ($request->get("type") == "1") {
                //支付成功后操作
                $msg = "支付成功";
                $upOrder->status = 2;

            } else {
                //支付失败通知.
                $msg = "失败";
                $upOrder->status = 5;

            }
            $upOrder->save();
        }
        $order = NewOrder::where("sn", $trade_no)->first();
        $travel = $order->travel()->get()->first();
        $paytype = "";
        $paytype= $this->paytype($order->paytype);
        return view('tour.result')->with(compact("order", $order))->with(compact("travel", $travel))->with("msg", $msg)->with("paytype", $paytype);;
    }
    public static function paytype($str){
        switch ($str) {
            case 1:
                $paytype = "线下现金";
                break;
            case 2:
                $paytype = "支付宝";
                break;
            case 3:
                $paytype = "微信";
                break;
            case 4:
                $paytype = "对公账号";
                break;
        }
        return $paytype;
    }
    public static function status($str)
    {
        $paytype = "";
        switch ($str) {
            case 1:
                $paytype = "提交";
                break;
            case 2:
                $paytype = "已支付定金";
                break;
            case 3:
                $paytype = "完成订单";
                break;
            case 4:
                $paytype = "取消订单";
                break;
            case 5:
                $paytype = "支付失败";
                break;
        }
        return $paytype;
    }
}

class toInt
{
    public static function del0($num)
    {
        return "" . intval($num);
    }

    //单个数字变汉字
    public static function n2c($x)
    {
        $arr_n = array("零", "一", "二", "三", "四", "五", "六", "七", "八", "九", "十");
        return $arr_n[$x];
    }

    //读取数值（4位）
    public static function num_r($abcd)
    {
        $arr = array();
        $str = ""; //读取后的汉字数值
        $flag = 0; //该位是否为零
        $flag_end = 1; //是否以“零”结尾
        $size_r = strlen($abcd);
        for ($i = 0; $i < $size_r; $i++) {
            $arr[$i] = $abcd{$i};
        }
        $arrlen = count($arr);
        for ($j = 0; $j < $arrlen; $j++) {
            $ch = n2c($arr[$arrlen - 1 - $j]); //从后向前转汉字
            if ($ch == "零" && $flag == 0) { //如果是第一个零
                $flag = 1; //该位为零
                $str = $ch . $str; //加入汉字数值字符串
                continue;
            } elseif ($ch == "零") { //如果不是第一个零了
                continue;
            }
            $flag = 0; //该位不是零
            switch ($j) {
                case 0:
                    $str = $ch;
                    $flag_end = 0;
                    break; //第一位（末尾），没有以“零”结尾
                case 1:
                    $str = $ch . "十" . $str;
                    break; //第二位
                case 2:
                    $str = $ch . "百" . $str;
                    break; //第三位
                case 3:
                    $str = $ch . "千" . $str;
                    break; //第四位
                case 4:
                    $str = $ch . "万" . $str;
                    break; //第五位
                case 5:
                    $str = $ch . "十" . $str;
                    break; //第六位
                case 6:
                    $str = $ch . "百" . $str;
                    break; //第七位
                case 7:
                    $str = $ch . "千" . $str;
                    break; //第八位
            }
        }
        //如果以“零”结尾
        if ($flag_end == 1) {
            mb_internal_encoding("UTF-8");
            $str = mb_substr($str, 0, mb_strlen($str) - 1); //把“零”去掉
        }
        return $str;
    }

    public static function num2ch($num) //整体读取转换
    {
        $num_real = del0($num);//去掉前面的“0”
        $numlen = strlen($num_real);
        echo "numlen=" . $numlen . "";
        if ($numlen >= 9)//如果满九位，读取“亿”位
        {
            $y = substr($num_real, -9, 1);
            //echo $y;
            $wsbq = substr($num_real, -8, 4);
            $gsbq = substr($num_real, -4);
            $a = num_r(del0($gsbq));
            $b = num_r(del0($wsbq)) . "万";
            $c = num_r(del0($y)) . "亿";
        } elseif ($numlen <= 8 && $numlen >= 5) //如果大于等于“万”
        {
            $wsbq = substr($num_real, 0, $numlen - 4);
            $gsbq = substr($num_real, -4);
            $a = num_r(del0($gsbq));
            $b = num_r(del0($wsbq)) . "万";
            $c = "";
        } elseif ($numlen <= 4) //如果小于等于“千”
        {
            $gsbq = substr($num_real, -$numlen);
            $a = num_r(del0($gsbq));
            $b = "";
            $c = "";
        }
        $ch_num = $c . $b . $a;
        return $ch_num;
    }
}