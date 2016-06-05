<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    protected $username = "mobile";
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    protected function validator($username,$password)
//    {
//        if (!isset($username)){
//            return response()->json([
//                'status' => 0,
//                'msg' => "请输入用户名！"
//            ]);
//        }
//        if (!isset($password)){
//            return response()->json([
//                'status' => 0,
//                'msg' => "请输入密码！"
//            ]);
//        }
//
////        return Validator::make($data, [
////            'username' => 'required|max:255',
//////            'email' => 'required|email|max:255|unique:users',
////            'password' => 'required|confirmed|min:6',
////        ]);
//    }

    public function showLoginForm()
    {
        $view = property_exists($this, 'loginView')
            ? $this->loginView : 'auth.authenticate';

        if (view()->exists($view)) {
            return view($view);
        }
        session()->put('url_before_login',  url()->previous());

            //$url = session()->pull('url_before_login', '/');
//        \Log::debug("set url".  url()->previous());
        return view('auth.login');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getLogin(Request $request)
    {
        $user=new User();
       // $mobile=$request->get('txtMobile');
        //$password=$request->get('password');
//        if (!$mobile){
//           $errors="请输入手机号码！";
//            return view('auth.login')->withMsg($errors);
//        }

//        if (!$password){
//            $errors="请输入密码！";
//            return view('auth.login')->withMsg($errors);
//        }
        //return "1";

        $throttles = $this->isUsingThrottlesLoginsTrait();
        $user->mobile=$request->get("txtMobile");
        $user->password=$request->get("password");
        $credentials = $this->getCredentials($user);
       // $url = session()->pull('url_before_login', '/');
        if (Auth::guard($this->getGuard())->attempt($credentials, $user)) {
            $url = session()->pull('url_before_login', '/');
//            \Log::debug("get url".  $url);
            return redirect($url);
        }
//        $errors=$this->getFailedLoginMessage();
        $errors='用户名或密码错误';

        return view('auth.login')->withMsg($errors);
    }
    protected function getCredentials($user)
    {
        $result = [];
        $result['mobile']  = $user->mobile;
        $result["password"] =$user->password;
        return $result;
    }

}
