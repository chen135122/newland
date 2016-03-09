<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Study;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudyController extends Controller
{
    public function index()
    {
        $studys = Study::all();
		//$study=$study->paginate(1);
        return view('study.index',compact('studys'));//->with(compact('study'));
    }

    public function show($sn)
    {
        return view('tour.show');
    }
}
