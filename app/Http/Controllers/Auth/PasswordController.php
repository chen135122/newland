<?php

namespace App\Http\Controllers\Auth;
use Cookie;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use App\Models\User;
class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getReset()
    {
      //  return view('reset.index');
        return view('user.reset');
    }
    public  function  postreset_password(Request $request)
    {

        $username=$request->input('txtUserName');
        $code= $request->input('txtCode');
        $password=$request->input('password');
        if (empty($username)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入用户名！"
            ]);
        }
        if (empty($code)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入收到的验证码！"
            ]);
        }
        if (empty($password)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入密码！"
            ]);
        }
        $msg=$this->verify_sms_code($code);
        if($msg=="ok")
        {
            $user= User::where('username', $username)->first();
            if(empty($user))
            {
                return response()->json([
                    'status' => 0,
                    'msg' =>"对不起，您输入的用户名不存在！"
                ]);
            }
            $user->password_hash=bcrypt($password);
            $user->save();
            return response()->json([
                'status' => 1,
                'msg' => "您的密码已修改成功！",
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
    public function validate_username(Request $request)
    {
        $param=$request->get('param');
        $response=$this->validate_param($param,0);
        if($response=='ok')
        {
           return response()->json([
            'status' => "y",
            'info' => ""
            ]);
        }
        else
        {
            return response()->json([
                'status' => "n",
                'info' =>$response
                ]);
        }
    }

    public function sendsms(Request $request)
    {
        $txtUserName= $request->get('mobile');
        $response=$this->validate_param($txtUserName,1);
        if(strpos($response, "mobile:")!=false){
            return response()->json([
                'status' => 0,
                'msg' =>$response
            ]);
        }
        $txtMobile=str_replace("mobile:","",$response);
        $mobilecookie = Cookie::get("mobile");
        if (empty($txtUserName)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入手机号码！"
            ]);
        }

        if(!empty($mobilecookie)) {
            if($mobilecookie==$txtUserName){
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
            $tel_num=substr_replace($txtMobile,'****',3,4);
            Cookie::queue("mobile",$txtMobile, 2);
            Session::put("code_pw_reset",$code);
            return response()->json([
                'status' => 1,
                'time' =>2,
                'msg' =>"手机验证码已发送到".$tel_num.",请查收！"
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

    //验证  短信验证码
    function verify_sms_code($code)
    {

        if(!Session::has("code_pw_reset"))
        {
            return "对不起，验证码超时或已过期！";
        }
        if ($code!= Session::get("code_pw_reset", 'default'))
        {
            return  "您输入的验证码与系统的不一致";
        }
        return "ok";
    }
    public function validate_param($param,$leibie)
    {
        if (empty($param)){
            return "对不起，用户名不可为空！";
        }
        $model= User::where('username', $param)->first();
        if(empty($model))
        {
            return "对不起，您输入的用户名不存在！";
        }
       // return var_dump($model->mobile);
        if(empty($model->mobile))
        {
            return "您尚未绑定手机号码，无法取回密码！";
        }
        else
        {
            if($leibie==0)
                return "ok";
            else
                return "mobile:".$model->mobile;
        }
       // return 'ok';

    }
}
