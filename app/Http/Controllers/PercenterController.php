<?php

namespace App\Http\Controllers;
use App\Models\Favourity_detail;
use App\Models\Property;
use App\Models\Article;
use App\Models\NewOrder;
use App\Models\Travel;
use App\Models\Study;
use App\Models\Member;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class PercenterController  extends Controller
{

//    public function index()
//    {
////        $collectioncount=Favourity_detail::where('uid',$userid)->where('itemid',$article_id)->where('type',$article_type)->count();
//        $collection_type= 4; //我的收藏分类
//        $userid = auth()->user()->id;
//        $ItemArray=Favourity_detail::where('uid',$userid)->where('type',$collection_type)->lists('itemid');
//
//        $models=Article::whereIn('id', $ItemArray);
//        $models=$models->paginate(6);
//        return view('percenter.index')->with(compact('models'));
//    }
    public  function  edit(Request $request)
    {
        $userid = auth()->user()->id;
        $member=Member::find($userid);
        $member->nickname=$request->get("nickname");
        $member->address=$request->get("address");
        $member->city=$request->get("city");
        $member->birthday=strtotime($request->get("birthday"));
        $member->save();
       // $member->appends("type",3);
        return redirect("/percenter?type=3");
    }
    public function index(Request $request)
    {
        $type= $request->get('type');
//        $collectioncount=Favourity_detail::where('uid',$userid)->where('itemid',$article_id)->where('type',$article_type)->count();
        $collection_type= $request->get('crid'); //我的收藏分类
        if (empty($collection_type)){
            $collection_type=1;
        }
        if (empty($type)){
            $type=1;
        }

        $userid = auth()->user()->id;
        $member=Member::where("id",$userid)->first();
        $count1=Favourity_detail::where('uid',$userid)->where('type',1)->count();
        $count2=Favourity_detail::where('uid',$userid)->where('type',2)->count();
        $count3=Favourity_detail::where('uid',$userid)->where('type',3)->count();
        $count4=Favourity_detail::where('uid',$userid)->where('type',4)->count();


        switch($collection_type ){
            case 1:
                $typeUrl='house';
                break;
            case 2:
                $typeUrl='tour';
                break;
            case 3:
                $typeUrl='study';
                break;
            case 4:
                $typeUrl='news';
                break;
        }

//       $typeUrl=Favourity_detail::getLinkUrl($collection_type);
//        dd($typeUrl);
        $ItemArray=Favourity_detail::where('uid',$userid)->where('type',$collection_type)->lists('itemid');
        switch($collection_type ){
            case 1:
                $models=Property::whereIn('id', $ItemArray);
                break;
            case 2:
                $models=Travel::whereIn('id', $ItemArray);
                break;
            case 3:
                $models=Study::whereIn('id', $ItemArray);
                break;
            case 4:
                $models=Article::whereIn('id', $ItemArray);
                break;
        }

        $orderList=NewOrder::where('uid',$userid)->orderBy("created_at",'desc');
        if($type==2)
        {
            $models=$models->paginate(6)->appends(['crid' => $collection_type])->appends(['type' => $type]);
        }
        else if($type==1)
        {
        $orderList=$orderList->paginate(5);
        }
        return view('percenter.index')->with(compact('models','type','count1','count2','count3','count4','typeUrl','orderList','member'))
            ->with('type',$type);
    }
    public  static  function  Upper($moth,$type)
    {
        $result="";
        switch($type)
        {
            case 1:
                switch($moth)
                {
                    case 1:$result="一月";break;
                    case 2:$result="二月";break;
                    case 3:$result="三月";break;
                    case 4:$result="四月";break;
                    case 5:$result="五月";break;
                    case 6:$result="六月";break;
                    case 7:$result="七月";break;
                    case 8:$result="八月";break;
                    case 9:$result="九月";break;
                    case 10:$result="十月";break;
                    case 11:$result="十一月";break;
                    case 12:$result="十二月";break;
                }
               break;
               case  2:
                    switch($moth)
                    {
                        case 1:$result="星期一";break;
                        case 2:$result="星期二";break;
                        case 3:$result="星期三";break;
                        case 4:$result="星期四";break;
                        case 5:$result="星期五";break;
                        case 6:$result="星期六";break;
                        case 7:$result="星期日";break;
                    }
            break;
            }
        return $result;
    }
   public static function  payType($type)
    {
         switch ($type)
            {
                case 1:$paytype="提交";break;
                case 2:$paytype="已支付定金";break;
                case 3:$paytype="完成订单";break;
                case 4:$paytype="取消订单";break;
                case 5:$paytype="支付失败";break;
            }
        return $paytype;
    }

}