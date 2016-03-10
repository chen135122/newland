<?php

namespace App\Http\Controllers;
use App\Models\Favourity_detail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Session;
class FavouriteController extends Controller
{


    public function postFavourite_add(Request $request)
    {
        $username=$this->GetUserInfo();
        if(empty($username))
        {
            return response()->json([
                'status' => 0,
                'msg' => "对不起，用户尚未登录或已超时！"
            ]);
        }
        $article_id= $request->get('articleId');
        $article_type= $request->get('typeid');

        if (empty($article_id)||empty($article_type)){
            return response()->json([
                'status' => 0,
                'msg' => "您提交的商品参数有误！"
            ]);
        }

        $article_id=(int)$article_id;
        $article_type=(int)$article_type;
        if ($article_id==0||$article_type==0){
            return response()->json([
                'status' => 0,
                'msg' => "您提交的商品参数有误！"
            ]);
        }
        $user= User::where('username', $username)->first();
        $useid=$user->id;
        $favouritecount=Favourity_detail::where('uid',$useid)->where('articleId',$article_id)->where('typeid',$article_type)->count();
        if($favouritecount>0)
        {
            return response()->json([
                'status' => 0,
                'msg' => "已存在！"
            ]);
        }
        $favourite=new Favourity_detail();
        $favourite->uid=$useid;
        $favourite->articleId=$article_id;
        $favourite->typeid=$article_type;
        $favourite->created_at=time();
        $favourite->save();
        return response()->json([
            'status' => 1,
            'msg' => "您已添加成功"
        ]);

    }
   protected function  GetUserInfo()
    {
//        $username2=Session::get("SESSION_USER_INFO", 'default');
//        var_dump($username2);

        if(!Session::has("SESSION_USER_INFO"))
        {
            var_dump("aa1");
            return null;
        }
        return Session::get("SESSION_USER_INFO", 'default');
    }
}
