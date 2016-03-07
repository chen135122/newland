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
        $travels = Travel::where('recommend', 1);
		$travels=$travels->paginate(5);
        return view('tour.index')->with(compact('travels'));
    }

    public function show($sn)
    {
        return view('tour.show');
    }
}
