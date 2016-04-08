<?php

namespace App\Models;
use DB;

class Travel extends BaseModel
{
    protected $table = 'nz_travel_route';

    public function day()
    {
        return $this->hasOne('App\Models\TravelDay', 'routeid','id');
    }
    public function cate()
    {
        return $this->hasOne('App\Models\Cate', 'route_id','id');
    }
    public function feature()
    {
        return $this->hasOne('App\Models\Feature', 'route_id','id');
    }
    public function travelImg()
    {
        return   $query= $this->belongsTo('App\Models\Image', "id","itemid")->where("type","=","1")->where("smalltype",1)->orderBy("displayorder","asc");
    }
    public function getIsFavAttribute()
    {
        if(auth()->check()==false)
            return false;
        $user_id= auth()->user()->id;
        $article_id=$this->attributes['id'];
        $count=DB::table('nz_collection')->where('itemid',$article_id)->where('uid',$user_id)->where('type',2)->count();
        return $count>0?true:false;
    }
}
class TravelDay extends BaseModel
{
    protected $table = 'nz_travel_day';
    public function dayDetail()
    {
        return $this->hasOne('App\Models\TravelDayDetail', 'dayid','id');
    }
}
class TravelDayDetail extends BaseModel
{
    protected  $table='nz_travel_day_detail';
    public function detailImg()
    {
        return $this->hasOne('App\Models\Image', 'itemid','id')->where("type","=","1")->where("smalltype",2)->orderBy("displayorder","asc");
    }
}
//美食model
class Cate extends BaseModel
{
    protected $table = 'nz_travel_food';
    public function foodImg()
    {
        return $this->hasOne('App\Models\Image', 'itemid','id')->where("type","=","1")->where("smalltype",3)->orderBy("displayorder","asc");
    }
}
class Feature extends  BaseModel
{
    protected $table = 'nz_travel_feature';
}


