<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Travel;
use Cookie;
use Session;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function index()
    {
        $hotpropertys=$this->HotProperty(3);
        $travels=$this->Hottravels(6);
        $HouseCount = Property::where('status', '<>', 0)->where('status', '<>', 4)->count();
        $travelsCount = Travel::count();
        return view('home.index')->with(compact('hotpropertys','HouseCount','travels','travelsCount'));
    }

    public function faq()
    {
        return view('home.faq');
    }

    //热门旅游
    public function Hottravels($n)
    {
        $models= Travel::take($n)->select('id', 'title','bigtitle','picurl','referenceprice')->get();
        return $models;
    }

    //热门房产
    public function HotProperty($n)
    {
        $property = Property::where('status', '<>', 0)->where('status', '<>', 4);
        $property= $property->take($n)->select('id', 'title','picurl','total_price')->get();
        return $property;
    }
}
