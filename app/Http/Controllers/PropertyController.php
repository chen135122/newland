<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::where('status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('property.index')->with(compact('properties'));
    }

    public function show($sn)
    {
        $property = Property::where('sn', $sn)->first();
        return view('property.show')->with(compact('property'));
    }

}
