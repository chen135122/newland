<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\StudySP;
use App\Models\Property;
use App\Models\Article;
use App\Models\Region;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudyController extends Controller
{
    public function index()
    {
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $studys = Study::where("id",">",0);
        $rid = request()->get('rid');  //一级地区
        $cid= request()->get('cid'); //二级地区
        $did= request()->get('did'); //三级地区
        $regionlist=Region::where('parent_id', 0)->get();
        if (!empty($rid)){

            $studys= $studys->where('region', $rid);
            $regionclist=Region::where('parent_id', $rid)->get();
            $cid=$regionclist->first()->id;
            $regiondlist=Region::where('parent_id', $cid)->get();
        }

        if (!empty($cid)){
            $studys= $studys->where('city', $cid);
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
        }

        if (!empty($did)){
            $studys= $studys->where('district', $did);
            $cid=Region::find($did)->parent_id;
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
        }
        $studys = $studys->paginate(5);
        return view('study.index')->with(compact('studys','regionlist','regionclist','regiondlist','rid','cid','did','Lastedarticle','hotpropertys'));
    }

    public function show($id)
    {

        $study = Study::where('id', $id)->first();
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $pic=$study->propertyImg()->get();
        return view('study.show')->with(compact('study','Lastedarticle','hotpropertys','pic'));
    }

    //zhong xiao xue
    public function index_sp()
    {
        $studys = StudySP::where("id",">",0);
        $rid = request()->get('rid');  //一级地区
        $cid= request()->get('cid'); //二级地区
        $did= request()->get('did'); //三级地区
        $type= request()->get('type'); //学校类型
        $nature= request()->get('nature'); //学校性质
        $gender= request()->get('gender'); //学校性别

        $regionlist=Region::where('parent_id', 0)->get();
        if (!empty($type)&&$type!=0){
            $studys= $studys->where('type', $type);
        }
        if (!empty($nature)&&$nature!=0){
            $studys= $studys->where('nature', $nature);
        }
        if (!empty($gender)&&$gender!=0){
            $studys= $studys->where('gender', $gender);
        }
        if (!empty($rid)){

            $studys= $studys->where('region', $rid);
            $regionclist=Region::where('parent_id', $rid)->get();
            $cid=$regionclist->first()->id;
            $regiondlist=Region::where('parent_id', $cid)->get();
        }

        if (!empty($cid)){
            $studys= $studys->where('city', $cid);
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
        }

        if (!empty($did)){
            $studys= $studys->where('district', $did);
            $cid=Region::find($did)->parent_id;
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
        }
        $studys = $studys->paginate(5);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        return view('study.index_sp')->with(compact('studys','regionlist','regionclist','regiondlist','rid','cid','did','type','nature','gender','Lastedarticle','hotpropertys'));
    }

    public function show_sp($id)
    {
        $study = StudySP::where('id', $id)->first();
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $pic=$study->propertyImg()->get();
        return view('study.show_sp')->with(compact('study','Lastedarticle','hotpropertys','pic'));
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
