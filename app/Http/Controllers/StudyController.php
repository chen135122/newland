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
        $studys = Study::paginate(10);
        return view('study.index',compact('studys'));
    }

    public function show($id)
    {
        $study = Study::where('id', $id)->first();
        return view('study.show')->with(compact('study'));
    }
}
