<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\StudySP;
use App\Models\Property;
use App\Models\Article;
use App\Models\Region;
use App\Http\Requests;
use Overtrue\Wechat\QRCode;
use App\Http\Controllers\Controller;

class StudyController extends Controller
{
    public function index()
    {
        $parames=[];
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $studys = Study::where("publish",1);
        $rid = request()->get('rid');  //一级地区
        $cid= request()->get('cid'); //二级地区
        $did= request()->get('did'); //三级地区
        $regionlist=Region::where('parent_id', 0)->where('iscn', 2)->get();
        if (!empty($rid)){

            $studys= $studys->where('region', $rid);
            $regionclist=Region::where('parent_id', $rid)->get();
            if(empty($cid)){
                $cid=$regionclist->first()->id;
                $regiondlist=Region::where('parent_id', $cid)->get();
            }
            $parames["rid"]=$rid;
        }

        if (!empty($cid)){
            $studys= $studys->where('city', $cid);
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
            $parames["cid"]=$cid;
        }

        if (!empty($did)){
            $studys= $studys->where('district', $did);
            $cid=Region::find($did)->parent_id;
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
            $parames["did"]=$did;
        }
        $studys = $studys->paginate(5)->appends($parames);
        $allUrl= $this->qrcode();
        return view('study.index')->with(compact('studys','regionlist','regionclist','regiondlist','rid','cid','did','Lastedarticle','hotpropertys','allUrl'));
    }

    public function show($id)
    {

        $study = Study::where('id', $id)->first();
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $pic=$study->propertyImg()->get();
        $allUrl= $this->qrcode();
        return view('study.show')->with(compact('study','Lastedarticle','hotpropertys','pic','allUrl'));
    }
    public  function  qrcode(){
        $appId  = 'wxbf7a6d0b392ce5db';
        $secret = 'dd1b309aef23dfd916867a21688ba4ea';
        $mchid = '1287337101';
        //商户支付密钥Key。审核通过后，在微信发送的邮件中查看
        $key = 'hpr825QaxxKQ9Ms3IhjQdsw8vnDl1w9s';
        $qrcode = new QRCode($appId, $secret);
        $result = $qrcode->temporary(56, 6 * 24 * 3600);

        $ticket = $result->ticket;// 或者 $result['ticket']
        $expireSeconds = $result->expire_seconds; // 有效秒数
        $url = $result->url; // 二维码图片解析后的地址，开发者可根据该地址自行生成需要的二维码图片
        $allUrl=$qrcode->show($ticket);
        return $allUrl;
    }
    //zhong xiao xue
    public function index_sp()
    {
        $parames=[];
        $studys = StudySP::where("publish",1);
        $rid = request()->get('rid');  //一级地区
        $cid= request()->get('cid'); //二级地区
        $did= request()->get('did'); //三级地区
        $type= request()->get('type'); //学校类型
        $nature= request()->get('nature'); //学校性质
        $gender= request()->get('gender'); //学校性别
        $regionlist=Region::where('parent_id', 0)->where('iscn', 2)->get();
        if (!empty($type)&&$type!=0){
            $studys= $studys->where('type', $type);
            $parames["type"]=$type;
        }
        if (!empty($nature)&&$nature!=0){
            $studys= $studys->where('nature', $nature);
            $parames["nature"]=$nature;
        }
        if (!empty($gender)&&$gender!=0){
            $studys= $studys->where('gender', $gender);
            $parames["gender"]=$gender;
        }
        if (!empty($rid)){

            $studys= $studys->where('region', $rid);
            $regionclist=Region::where('parent_id', $rid)->get();
            if(empty($cid)) {
                $cid = $regionclist->first()->id;
                $regiondlist = Region::where('parent_id', $cid)->get();
            }
            $parames["rid"]=$rid;
        }

        if (!empty($cid)){
            $studys= $studys->where('city', $cid);
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
            $parames["cid"]=$cid;
        }
        if (!empty($did)){
            $studys= $studys->where('district', $did);
            $cid=Region::find($did)->parent_id;
            $rid=Region::find($cid)->parent_id;
            $regionclist=Region::where('parent_id', $rid)->get();
            $regiondlist=Region::where('parent_id', $cid)->get();
            $parames["did"]=$did;
        }

        $studys = $studys->paginate(5)->appends($parames);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $allUrl= $this->qrcode();
        return view('study.index_sp')->with(compact('studys','regionlist','regionclist','regiondlist','rid','cid','did','type','nature','gender','Lastedarticle','hotpropertys','allUrl'));
    }

    public function show_sp($id)
    {
        $study = StudySP::where('id', $id)->first();
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
        $pic=$study->propertyImg()->get();
        $allUrl= $this->qrcode();
        return view('study.show_sp')->with(compact('study','Lastedarticle','hotpropertys','pic','allUrl'));
    }

    //最新资讯
    public function LastedNews($n)
    {
        $article= Article::where(['publish'=>1,'ishot'=>1,'catid'=>8])->orderBy('displayorder', 'asc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::where(['publish'=>1,'ishot'=>1])->orderBy('displayorder', 'asc')->take($n)->select('id', 'title','picurl','address','tagsid')->get();
        return $property;
    }
}
