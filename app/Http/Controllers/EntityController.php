<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;
use Overtrue\Wechat\QRCode;
use App\Http\Requests;
use App\Models\Property;
use App\Http\Controllers\Controller;
class EntityController extends Controller
{
    const TYPE_HOTEL = 3;
    const TYPE_GOOD  = 4;
    const TYPE_NEWZEALAND  = 5;

    public function hotel()
    {
        $models = Partner::orderBy('displayorder', 'asc')->where("iswork", static::TYPE_HOTEL)->paginate(10);
        $title  = '汽车旅馆加盟';
        $sub_title = '专业的汽车旅馆加盟和管理';
        $url    = 'hotel';
        return view('entity.index')->with(compact('models', 'title', 'url', 'sub_title'));
    }

    public function good()
    {
        $models = Partner::orderBy('displayorder', 'asc')->where("iswork", static::TYPE_GOOD)->paginate(10);
        $title  = '进口商品代理';
        $sub_title = '为您提供新西兰全境最优质的产品';
        $url    = 'good';
        return view('entity.index')->with(compact('models', 'title', 'url', 'sub_title'));
    }

    public function newzealand()
    {
        $models = Partner::orderBy('displayorder', 'asc')->where("iswork", static::TYPE_NEWZEALAND)->paginate(10);
        $title  = '全新西兰业务';
        $url    = 'newzealand';
        return view('entity.index')->with(compact('models', 'title', 'url'));
    }

    public function show($id)
    {
        $model = Partner::where('id', $id)->first();
        $type = $model->iswork;
        switch ($type) {
            case static::TYPE_HOTEL:
                $title = "旅馆加盟";
                $sub_title = '专业的汽车旅馆加盟和管理';
                $url = "hotel";
                break;
            case static::TYPE_GOOD:
                $title = "进口商品代理";
                $sub_title = '为您提供新西兰全境最优质的产品';
                $url = "good";
                break;
            case static::TYPE_NEWZEALAND:
                $title = "全新西兰业务";
                $url = "newzealand";
                break;
        }
        return view('entity.show')->with(compact('model', 'title', 'url', 'sub_title'));
    }


}
