<?php

namespace App\Http\Controllers;
use App\Models\PriceBase;
use App\Models\Travel;
use App\Models\TravelDay;
use App\Models\TravelCategory;
use App\Models\NewOrder;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Omnipay;
use App\Http\Requests;
use Session;
use App\Http\Controllers\Controller;
use Overtrue\Wechat\QRCode;
use Overtrue\Wechat\Url;
require_once app_path().'/WxPayPubHelper/WxPayPubHelper.php';
//require_once app_path().

class AlipayController extends Controller
{
    public function pay(Request $request)
    {
       $num=$request->get("perNum");
        $travel=Travel::where("id",$request->get("rout"))->first();
        $order=new NewOrder();
        $order->itemid=$request->get("rout");
        $order->uid=auth()->user()->id;;
        $order->sn=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);;
        //$order->startdate=Carbon::now();
        // $order->children=0;
        $order-> totalprice=($travel->referenceprice);
        //$order-> discount=0.0;
        $order-> orderprice=$travel->oprice;
        $order-> status=1;
        $order->type=1;
        $order->paytype=2;
        $order-> created_at=Carbon::now();
        $order-> created_by=1;
        $order->num=$num;
        $order->username=strval($request->get("username")) ;
        $order->phone=strval($request->get("userPhone"));
        $order->email=strval($request->get("userEmail"));
        $order->remark=strval($request->get("content"));
        //$order->adults=strval($request->get("perNum"));

//            $order->updated_at=Carbon::now();
//            $order->paytime=null;
//            $order->transid="12";
        $order->save();

       if($order->id>0)
       {
           $category=$request->get('baseprice');
           foreach($category as $key=>$value)
           {
               $base= PriceBase::where("id",$value)->first();
               $orderDetail=new OrderDetail();
               $orderDetail->orderid=$order->id;
               $orderDetail->title=$base->title;
               $orderDetail->price=$base->price;
               $orderDetail->num=$num;
               $orderDetail->created_at=Carbon::now();
               $orderDetail->created_by=1;
               $orderDetail->updated_at=null;
               $orderDetail->updated_by=null;
               $orderDetail->save();
           }


            $gateway = Omnipay::gateway();

            $options = [
                'out_trade_no' =>  $order->sn,
                'subject' => $request->get("subject"),
                'total_fee' => '0.01',
            ];
            $response = $gateway->purchase($options)->send();
            $response->redirect();
       }
        else
            return redirect($request->get("url"));
    }

    public  function wpay(Request $request)
    {
        $num=$request->get("perNum");
        $travel=Travel::where("id",$request->get("rout"))->first();
        $order=new NewOrder();
        $order->itemid=$request->get("rout");
        $order->uid=auth()->user()->id;
        $order->sn=date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);;
        //$order->startdate=Carbon::now();
        // $order->children=0;
        $order-> totalprice=($travel->referenceprice);
        //$order-> discount=0.0;
        $order-> orderprice=$travel->oprice;
        $order-> status=1;
        $order->type=1;
        $order->paytype=3;
        $order-> created_at=Carbon::now();
        $order-> created_by=1;
        $order->num=$num;
        $order->username=strval($request->get("username")) ;
        $order->phone=strval($request->get("userPhone"));
        $order->email=strval($request->get("userEmail"));
        $order->remark=strval($request->get("content"));
        //$order->adults=strval($request->get("perNum"));

//            $order->updated_at=Carbon::now();
//            $order->paytime=null;
//            $order->transid="12";
        $order->save();
        if($order->id>0)
        {
            $category=$request->get('baseprice');
            foreach($category as $key=>$value)
            {
                $base= PriceBase::where("id",$value)->first();
                $orderDetail=new OrderDetail();
                $orderDetail->orderid=$order->id;
                $orderDetail->title=$base->title;
                $orderDetail->price=$base->price;
                $orderDetail->num=$num;
                $orderDetail->created_at=Carbon::now();
                $orderDetail->created_by=1;
                $orderDetail->updated_at=null;
                $orderDetail->updated_by=null;
                $orderDetail->save();
            }
             $subject=  $request->get("subject");
        }
        else
            return redirect($request->get("url"));
       return view("Alipay.wpay")->with(["subject"=>$subject,"sn"=>$order->sn,"price"=>0.01]);
    }

    public  function  topay($id=null)
    {
        if($id==null)
        {
            return redirect("/percenter?type=1");
        }

        $order= NewOrder::where(["uid"=>auth()->user()->id,"id"=>$id])->first();
        if(empty($order)||$order->status!=1)
            return redirect("/percenter?type=1");
        $travel=Travel::find($order->itemid);
        if($order->paytype==2)
        {
            $gateway = Omnipay::gateway();
            $options = [
                'out_trade_no' =>  $order->sn,
                'subject' => $travel->bigtitle,
                'total_fee' => '0.01',
            ];
            $response = $gateway->purchase($options)->send();
            $response->redirect();
        }
        else if($order->paytype==3){
            return view("Alipay.wpay")->with("subject",$travel->bigtitle)->with("sn", $order->sn);
        }
        return  redirect("/percenter?type=1");
    }
    public  function  notify()
    {
        //使用通用通知接口
        $notify = new \Notify_pub();

        //存储微信的回调
        $xml = $GLOBALS['HTTP_RAW_POST_DATA'];
        $notify->saveData($xml);

        //验证签名，并回应微信。
        //对后台通知交互时，如果微信收到商户的应答不是成功或超时，微信认为通知失败，
        //微信会通过一定的策略（如30分钟共8次）定期重新发起通知，
        //尽可能提高通知的成功率，但微信不保证通知最终能成功。
        if($notify->checkSign() == FALSE){
            $notify->setReturnParameter("return_code","FAIL");//返回状态码
            $notify->setReturnParameter("return_msg","签名失败");//返回信息
        }else{
            $notify->setReturnParameter("return_code","SUCCESS");//设置返回码
        }
        $returnXml = $notify->returnXml();
        echo $returnXml;

        //==商户根据实际情况设置相应的处理流程，此处仅作举例=======

        //以log文件形式记录回调信息
        //         $log_ = new Log_();
        //$log_name= __ROOT__."/Public/notify_url.log";//log文件路径

        //$this->log_result($log_name,"【接收到的notify通知】:\n".$xml."\n");

        if($notify->checkSign() == TRUE)
        {
            if ($notify->data["return_code"] == "FAIL") {
                //此处应该更新一下订单状态，商户自行增删操作
                //log_result($log_name,"【通信出错】:\n".$xml."\n");
                $msg=通信出错;
            }
            elseif($notify->data["result_code"] == "FAIL"){
                //此处应该更新一下订单状态，商户自行增删操作
                //log_result($log_name,"【业务出错】:\n".$xml."\n");
                $msg=支付失败;
            }
            else{
                //此处应该更新一下订单状态，商户自行增删操作
                //log_result($log_name,"【支付成功】:\n".$xml."\n");
                $msg=支付成功;
            }
            $order=NewOrder::where("sn","201603160217463574")->first();
            $travel=$order->travel()->get()->first();
            return view('tour.result')->with(compact("order",$order))->with(compact("travel",$travel))->with("msg",$msg);
            //商户自行增加处理流程,
            //例如：更新订单状态
            //例如：数据库操作
            //例如：推送支付完成信息
        }
    }
    public  function wem()
    {
//        $appId  = 'wxcf1588ee73525cea';
//        $secret = '2d2e236464875cea7218559df7965b23';
//        $mchid = '1287337101';
//        //商户支付密钥Key。审核通过后，在微信发送的邮件中查看
//        $key = 'hpr825QaxxKQ9Ms3IhjQdsw8vnDl1w9s';
//        $qrcode = new QRCode($appId, $secret);
//        $result = $qrcode->temporary(56, 6 * 24 * 3600);
//
//        $ticket = $result->ticket;// 或者 $result['ticket']
//        $expireSeconds = $result->expire_seconds; // 有效秒数
//        $url = $result->url; // 二维码图片解析后的地址，开发者可根据该地址自行生成需要的二维码图片
//        $u=$qrcode->show($ticket);


        $appId  = 'wx3cf0f39249eb0e60';
        $secret = 'f1c242f4f28f735d4687abb469072a29';

        $url = new Url($appId, $secret);
        $shortUrl = $url->short('http://overtrue.me/open-source');
        return view("Alipay.wem")->with("shortUrl",$shortUrl);
    }
    public function query(Request $request)
    {
        $trade_no=$request->get("tradeNo");

        //退款的订单号
        if (!isset($trade_no))
        {
            $out_trade_no = " ";
        }else{
            $out_trade_no =$trade_no;

            //使用订单查询接口
            $orderQuery = new \OrderQuery_pub();
            //设置必填参数
            //appid已填,商户无需重复填写
            //mch_id已填,商户无需重复填写
            //noncestr已填,商户无需重复填写
            //sign已填,商户无需重复填写
            $orderQuery->setParameter("out_trade_no","$out_trade_no");//商户订单号
            //非必填参数，商户可根据实际情况选填
            //$orderQuery->setParameter("sub_mch_id","XXXX");//子商户号
            //$orderQuery->setParameter("transaction_id","XXXX");//微信订单号

            //获取订单查询结果
            $orderQueryResult = $orderQuery->getResult();

            //商户根据实际情况设置相应的处理流程,此处仅作举例
            if ($orderQueryResult["return_code"] == "FAIL") {
                $trade_status=$orderQueryResult['return_msg'];
            }
            elseif($orderQueryResult["result_code"] == "FAIL"){
                $trade_status=$orderQueryResult['err_code'];
                $trade_status=$orderQueryResult['err_code_des'];
            }
            else{
                $trade_status=$orderQueryResult['trade_state'];
            }
        }
        return $trade_status;
    }
    public function result(){

        $gateway = Omnipay::gateway();

        $options = [
            'request_params'=> $_REQUEST,
        ];

        $response = $gateway->completePurchase($options)->send();

        if ($response->isSuccessful() && $response->isTradeStatusOk()) {
            //支付成功后操作
            exit('支付成功');
        } else {
            //支付失败通知.
            exit('支付失败');
        }
    }
}