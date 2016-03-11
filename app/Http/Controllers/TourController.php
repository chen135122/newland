<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use App\Models\TravelDay;
use App\Models\TravelCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index(Request $request)
    {

        $travels=Travel::where("id",">",0);

        $category=$request->get('category');
        $price=$request->get('price');
        if (!empty($price)){
            $travels= $travels->whereBetween('oprice', $price);
        }
        else{
            $category=[];
        }
        if (!empty($category)){
                $travels= $travels->WhereIn('categoryid', $category);
        }
       if($sortprice = request()->get('sortPrice'))
       {
           if($sortprice=="higher")
           {
               $travels= $travels->orderBy("mprice","desc")->paginate(5)->appends(['sortPrice' => 'higher']);
           }
           else{
               $travels = $travels->orderBy("mprice","asc")->paginate(5)->appends(['sortPrice' => 'lower']);
           }
       }
        else
        {
        $travels=$travels->orderBy("created_at","desc")->paginate(5);
        }
        $travelCategorys = TravelCategory::all();
        $maxprice=Travel::where("id",">",0)->orderBy("mprice","desc")->first()->oprice;
        if (!empty($price)){
            $minprice=$price[0];
            $toprice=$price[1];
        }
        else{
            $minprice=0;
            $toprice=Travel::where("id",">",0)->orderBy("mprice","desc")->first()->oprice;
        }

        return view('tour.index')->with(compact('travels'))->with(compact("travelCategorys"))->with(compact('category'))
            ->with("maxprice",$maxprice)->with("minprice",$minprice)->with("toprice",$toprice);
    }

    public function show($id)
    {
        $travel = Travel::where('id', $id)->first();
        $travelDay=$travel->day()->get(); //TravelDay::where("route_id",$travel->id);
        $pic=explode(',',$travel->picurl);
        return view('tour.show')->with(compact('travel'))->with(compact('pic'))->with(compact("travelDay",$travelDay));
    }
    public function order($id)
    {
        $travel = Travel::where('id', $id)->first();
        $travelDay=$travel->day()->get(); //TravelDay::where("route_id",$travel->id);
        $pic=explode(',',$travel->picurl);
        return view('tour.show')->with(compact('travel'))->with(compact('pic'))->with(compact("travelDay",$travelDay));
    }
}
