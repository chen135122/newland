<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use App\Models\TravelDay;
use App\Models\TravelCategory;
use App\Models\newOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Omnipay;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlipayController extends Controller
{
    public function pay(Request $request)
    {
        $order=new newOrder();
        $order->route_id=$request->get("rout");
        $order->uid=1;
        $order->sn=time();
        $order->startdate=Carbon::now();
        $order->children=0;
        $order-> total_price=0.0;
        $order-> discount=0.0;
        $order-> price=0.0;
        $order-> oprice=0.0;
        $order->status=1;
        $order-> created_at=Carbon::now();
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
            $gateway = Omnipay::gateway();

            $options = [
                'out_trade_no' => date('YmdHis') . mt_rand(1000,9999),
                'subject' => $request->get("subject"),
                'total_fee' => '0.01',
            ];

            $response = $gateway->purchase($options)->send();
            $response->redirect();
       }
        else
            return redirect($request->get("url"));
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