<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
//        $properties = Property::where('status', 1);
//        if($title =$request->get('title')){
//            $properties = $properties->where('title', 'LIKE', '%'.$title.'%');
//        }
        $price=$request->get('price');
        if (!empty($price)){
            $properties= Property::whereBetween('total_price', $price);
        }
        if($sortprice = request()->get('sortPrice'))
        {
            if($sortprice=="higher")
            {
                $properties= Property::orderBy("total_price","desc")->paginate(5)->appends(['sortPrice' => 'higher']);
            }
            else{
                $properties =Property::orderBy("total_price","asc")->paginate(5)->appends(['sortPrice' => 'lower']);
            }
        }
        else
        {
            $properties=Property::orderBy("id","desc")->paginate(5);
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

        return view('property.index')->with(compact('properties','maxprice','minprice','toprice'));
    }

    public function show($id)
    {

        $property = Property::where('id', $id)->first();
        $locationArray=explode(',',$property->location);

        if(count($locationArray)==2){
            $locationX=$locationArray[0];
            $locationY=$locationArray[1];
        }
        else{
            $locationX=-45.023564;
            $locationY=168.9689589;
        }
        return view('property.show')->with(compact('property','locationX','locationY'));
    }

}
