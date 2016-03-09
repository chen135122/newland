<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index()
    {

        $travels=Travel::where("id",">",0);

       if($sortprice = request()->get('sortPrice'))
       {
           if($sortprice=="higher")
           {
               $travels= $travels->orderBy("created_at","desc")->paginate(5)->appends(['sortPrice' => 'higher']);
           }
           else{
               $travels = $travels->orderBy("created_at","asc")->paginate(5)->appends(['sortPrice' => 'lower']);
           }
       }
        else
        {
        $travels=$travels->orderBy("created_at","desc")->paginate(5);
        }
        return view('tour.index')->with(compact('travels'));
    }

    public function show($id)
    {
        $travel = Travel::where('id', $id)->first();
        return view('tour.show')->with(compact('travel'));
    }
}
