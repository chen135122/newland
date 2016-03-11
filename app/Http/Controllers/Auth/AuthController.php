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

    protected $username = "username";
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
    protected function validator($username,$password)
    {
        if (!isset($username)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入用户名！"
            ]);
        }
        if (!isset($password)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入密码！"
            ]);
        }

//        return Validator::make($data, [
//            'username' => 'required|max:255',
////            'email' => 'required|email|max:255|unique:users',
//            'password' => 'required|confirmed|min:6',
//        ]);
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

    public function postLogin(Request $request)
    {
        $username=$request->get('username');
        $password=$request->get('password');
        if (!isset($username)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入用户名！"
            ]);
        }
        if (!isset($password)){
            return response()->json([
                'status' => 0,
                'msg' => "请输入密码！"
            ]);
        }
        $throttles = $this->isUsingThrottlesLoginsTrait();
        $credentials = $this->getCredentials($request);

<<<<<<< HEAD
        if (Auth::guard($this->getGuard())->attempt($credentials, $request->has('remember'))) {
           // dd(auth()->user());
            return redirect('/');
            return response()->json([
                'status' => 1,
                'msg' => "登录成功！".auth()->user()->id
            ]);
=======
//        if (Auth::guard($this->getGuard())->attempt($credentials, $request->has('remember'))) {
//            return response()->json([
//                'status' => 1,
//                'msg' => "登录成功！"
//            ]);
////            return $this->handleUserWasAuthenticated($request, $throttles);
//        }

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return response()->json([
                'status' => 1,
                'msg' => "登录成功了！"
            ]);
            return redirect()->intended($this->redirectPath());
>>>>>>> 78e391b8e550b99baa36ac4125e7a39dd5a3806a
        }

       // return view('auth.login')->withErrors('zzzzz');
        $errors=$this->getFailedLoginMessage();
        return response()->json([
            'status' => 0,
            'msg' => "错误提示：".$errors
        ]);
    }
    protected function getCredentials(Request $request)
    {
        return $request->only($this->loginUsername(), 'password');
    }

}
