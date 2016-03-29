<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Article;
use App\Models\Region;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::where('status', '<>', 0)->where('status', '<>', 4);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $price=$request->get('price');
        $rid = request()->get('rid');  //一级地区
        $cid= request()->get('cid'); //二级地区
        $did= request()->get('did'); //三级地区
        $type= request()->get('type'); //房屋类型
        if (!empty($type)&&$type!=0){
            $properties= $properties->where('type', $type);
        }
        if (!empty($price)){
            $properties= $properties->whereBetween('total_price', $price);
        }
        $regionlist=Region::where('parent_id', 0)->get();
        if (!empty($rid)){

            $properties= $properties->where('region', $rid);
            $regionclist=Region::where('parent_id', $rid)->get();
            $cid=$regionclist->first()->id;
            $regiondlist=Region::where('parent_id', $cid)->get();
        }

        if (!empty($cid)){
            $properties= $properties->where('city', $cid);
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
          }

        if (!empty($did)){
            $properties= $properties->where('district', $did);
            $cid=Region::find($did)->parent_id;
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
         }


        $maxprice=Property::max('total_price');
        if (!empty($price)){
            $minprice=$price[0];
            $toprice=$price[1];
        }
        else{
            $minprice=0;
            $toprice=$maxprice;
        }


        if($sortprice = request()->get('sortPrice'))
        {
            if($sortprice=="higher")
            {
                $properties= $properties->orderBy("total_price","desc")->paginate(5)->appends(['sortPrice' => 'higher']);
            }
            else{
                $properties =$properties->orderBy("total_price","asc")->paginate(5)->appends(['sortPrice' => 'lower']);
            }
        }
        else
        {
            $properties=$properties->orderBy("id","desc")->paginate(5);
        }
        return view('property.index')->with(compact('properties','maxprice','minprice','toprice','regionlist','regionclist','regiondlist','rid','cid','did','type','Lastedarticle','hotpropertys'));
    }

    public function show($id)
    {
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $property = Property::where('id', $id)->first();
        $locationArray=explode(',',$property->location);

        $pic=$property->propertyImg()->get();
        if(count($locationArray)==2){
            $locationX=$locationArray[0];
            $locationY=$locationArray[1];
        }
        else{
            $locationX=-45.023564;
            $locationY=168.9689589;
        }
        return view('property.show')->with(compact('property','locationX','locationY','Lastedarticle','hotpropertys','pic'));
    }

    //最新资讯
    public function LastedNews($n)
    {
        $article= Article::where('status',1)->orderBy('displayorder', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::orderBy('id', 'desc')->take($n)->select('id', 'title','picurl','address')->get();
        return $property;
    }
}
