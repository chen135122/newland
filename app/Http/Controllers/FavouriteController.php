<?php

namespace App\Http\Controllers;
use App\Models\Favourity_detail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;
class FavouriteController extends Controller
{


    public function postFavourite_add(Request $request)
    {

        if(auth()->check()==false)
        {
            return response()->json([
                'status' => 0,
                'msg' => "您尚未登录，请登录之后添加收藏！"
            ]);
        }
        $userid=auth()->user()->id;
        $article_id= $request->get('article_id');
        $article_type= $request->get('typeid');

        if (empty($article_id)||empty($article_type)){
            return response()->json([
                'status' => 0,
                'msg' => "您提交的参数有误！"
            ]);
        }

        $article_id=(int)$article_id;
        $article_type=(int)$article_type;
        if ($article_id==0||$article_type==0){
            return response()->json([
                'status' => 0,
                'msg' => "您提交的参数有误！"
            ]);
        }
        $favouritecount=Favourity_detail::where('uid',$userid)->where('articleId',$article_id)->where('typeid',$article_type)->count();
        if($favouritecount>0)
        {
            return response()->json([
                'status' => 0,
                'msg' => "此收藏已存在！"
            ]);
        }
        $favourite=new Favourity_detail();
        $favourite->uid=$userid;
        $favourite->articleId=$article_id;
        $favourite->typeid=$article_type;
        $favourite->save();
        return response()->json([
            'status' => 1,
            'msg' => "成功添加收藏"
        ]);

    }
}
