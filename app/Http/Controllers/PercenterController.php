<?php

namespace App\Http\Controllers;
use App\Models\Favourity_detail;
use App\Models\Property;
use App\Models\Article;
use App\Models\Travel;
use App\Models\Study;
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
    public function index(Request $request)
    {
        $type= $request->get('type');
//        $collectioncount=Favourity_detail::where('uid',$userid)->where('itemid',$article_id)->where('type',$article_type)->count();
        $collection_type= $request->get('crid'); //我的收藏分类
        if (empty($collection_type)){
            $collection_type=4;
        }
        if (empty($type)){
            $type=2;
        }

        $userid = auth()->user()->id;

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

        $models=$models->paginate(6)->appends(['crid' => $collection_type])->appends(['type' => $type]);
        return view('percenter.index')->with(compact('models','type','count1','count2','count3','count4','typeUrl'));
    }

}