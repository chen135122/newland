<?php

namespace App\Http\Controllers;
use Cookie;
use Session;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function validate_mobile(Request $request)
    {
        $param=$request->get('param');
        if (empty($param)){
            return response()->json([
                'status' => "n",
                'info' => "手机号不可为空！"
            ]);
        }
        $paramcount = User::where('mobile', '=',$param)->count();
        if($paramcount>0)
        {
            return response()->json([
                'status' => "n",
                'info' => "该手机号已被注册"
            ]);
        }
        else
        {
            return response()->json([
                'status' => "y",
                'info' => "该手机号可用"
            ]);
        }

    }
    public function sendsms(Request $request)
    {
            $txtMobile= $request->get('mobile');
            $mobilecookie = Cookie::get("mobile");
            if (empty($txtMobile)){
                return response()->json([
                    'status' => 0,
                    'msg' => "请输入手机号码！"
                ]);
            }

            if(!empty($mobilecookie)) {
               if($mobilecookie==$txtMobile){
                   return response()->json([
                       'status' => 0,
                       'msg' => "刚已发送过短信，请2分钟后再试！"
                   ]);
               }
            }
            header("Content-Type:text/html;charset=utf-8");
            $apikey = "8a66590ed5d4842c546ff6b51c45ad56"; //修改为您的apikey(https://www.yunpian.com)登陆官网后获取
            $mobile = urlencode($txtMobile); //请用自己的手机号代替
            $code= $this->randomkeys(4);
            $text="【ALLIN新西兰】您的验证码是".$code;
            $ch = curl_init();

            /* 设置验证方式 */
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded','charset=utf-8'));
            /* 设置返回结果为流 */
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            /* 设置超时时间*/
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            /* 设置通信方式 */
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            // 发送短信
            $data=array('text'=>$text,'apikey'=>$apikey,'mobile'=>$mobile);
            $json_data = $this->send($ch,$data);
           $array = json_decode($json_data,true);
           if($array['code']==0)
           {
               Cookie::queue("mobile",$txtMobile, 2);
               Session::put('sms_code',$code);
               return response()->json([
                   'status' => 1,
                   'time' =>2,
                   'msg' =>"手机验证码发送成功"
               ]);
           }
            else
            {
                return response()->json([
                    'status' => 0,
                    'msg' =>  $array['detail']
                ]);
            }
    }

    //用户注册
    public function postUser_Register(Request $request){
        $user=new User();
        $txtMobile = $request->input('txtMobile');
        $txtPassword= $request->input('userpassword');
        $code= $request->input('txtCode');

        if (empty($txtMobile)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入手机号码！"
            ]);
        }
        if (empty($code)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入收到的验证码！"
            ]);
        }
        if (empty($txtPassword)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入密码！"
            ]);
        }

        $msg=$this->verify_sms_code($code);
       if($msg=="ok")
       {
          // $Passwords= Hash::make($txtPassword);
           $Passwords=bcrypt($txtPassword);
           $user->password=$Passwords;
           $user->status=1;
           $user->mobile=$txtMobile;
           $user->save();
           return response()->json([
               'status' => 1,
               'msg' => "您已注册成功，欢迎登录",
               'url'=>"/auth/login"
           ]);
       }
        else
        {
            return response()->json([
                'status' => 0,
                'msg' =>$msg
            ]);

        }
    }
    //验证  短信验证码
     function verify_sms_code($code)
    {
        if(!Session::has('sms_code'))
        {
            return "对不起，验证码超时或已过期！";
        }
        if ($code!= Session::get('sms_code', 'default'))
        {
            return  "您输入的验证码与系统的不一致";
        }
        return "ok";
    }
    //发送验证码
     function send($ch,$data){
        curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/sms/send.json');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        return curl_exec($ch);
    }
    //生成随机数
    function randomkeys($length)
    {
        $key = "";
        $pattern='1234567890';
        for($i=0;$i<$length;$i++)
        {
            $key .= $pattern{mt_rand(0,9)};
        }
        return $key;
    }


}
