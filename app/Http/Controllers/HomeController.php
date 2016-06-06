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
use App\Models\UserStatus;
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
        $content='';
        $model=\App\Models\Infor::where('title', '关于我们')->first();
        if($model)
            $content=$model->content;

        return view('home.about')->with(compact('allUrl','content'));
    }
    public function partner()
    {
        $allUrl=$this->url();
        return view('home.partner')->with(compact('allUrl'));
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
        $models= Travel::where(['publish'=>1,'ishot'=>1])->take($n)->select('id', 'title','bigtitle','picurl','referenceprice')->get();
        return $models;
    }

    //热门房产
    public function HotProperty($n)
    {
        $property = Property::where('status', '<>', 0)->where('status', '<>', 4);
        $property= $property->take($n)->select('id', 'title','picurl','total_price')->get();
        return $property;
    }
    public  function login(Request $request)
    {
        $uuid=$request->get("uuid");
        $user=new User();
        if (isset($_REQUEST['code'])){
            $req="https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxcf1588ee73525cea&secret=2d2e236464875cea7218559df7965b23&code=".$_REQUEST['code']."&grant_type=authorization_code";
            $json= file_get_contents($req);
            $arry=json_decode($json);
            //返回json字符串
            //access_token	网页授权接口调用凭证,注意：此access_token与基础支持的access_token不同
            //expires_in	access_token接口调用凭证超时时间，单位（秒）
            //refresh_token	用户刷新access_token
            //openid	用户唯一标识，请注意，在未关注公众号时，用户访问公众号的网页，也会产生一个用户和公众号唯一的OpenID
            //scope	用户授权的作用域，使用逗号（,）分隔
            $token= $arry->access_token;
            $oppenid= $arry->openid;
            $userurl="https://api.weixin.qq.com/sns/userinfo?access_token=".$token."&openid=".$oppenid."";
            $userjson= file_get_contents($userurl);
            if(isset($userjson))
            {
                $userarry=json_decode($userjson);
                $mobile=$userarry->openid;
                $password=$userarry->openid;
                $newmobile=$mobile;
                $paramcount = User::where("mobile",strval($mobile))->get()->count();
                $user->password= bcrypt("123456");
                $newpassword=$user->password;
                $user->status=1;
                $user->mobile=$mobile;
                $user->nickname=$userarry->nickname;
                $user->address=$userarry->country.",".$userarry->province.",".$userarry->city;
                if($paramcount>0)
                {
                    dd("1".$paramcount.","+$mobile);
                }
                else{
                    dd("2".$paramcount+",".$mobile);
                    $user->save();
                }
            }
        }else{
            //return view('auth.login');
        }
        //return redirect()->guest("/auth/login?txtMobile=".$newmobile."&password=".$newpassword);
        return view("home.login")->with("uuid",$uuid);
    }

    public function  getlogstatus(Request $request)
    {
        $uuid=$request->get("uuid");
        $user=UserStatus::where("uuid",$uuid)->first();

        if(isset($user))
        {
            $codeuser=User::where("id",$user->cusid)->first();
            $array=[
                "status"=>  $user->status,
                "cusid"=>$user->cusid,
                "mobile"=>$codeuser->mobile
            ];
            return  $array;
        }
        else{
            return "-1";
        }
    }

    public  function getseesion(Request $request)
    {
        $uuid=$request->get("uuid");
        $userid=$request->get("userid");
        $usestatus=$request->get("usestatus");
        $user=new UserStatus();
        $user->uuid=$uuid;
        $user->cusid= $userid;
        $user->status=$usestatus;
        $user->save();
        return "1";
    }
    public function getArray($url)
    {
        return redirect()->guest($url);
    }
}
