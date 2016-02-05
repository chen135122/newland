<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function index()
    {
        return view('tour.index');
    }

    public function show($sn)
    {
        return view('tour.show');
    }
}
