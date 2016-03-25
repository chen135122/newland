<?php

namespace App\Models;

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
        return   $query= $this->belongsTo ('App\Models\Image', 'id','itemid')->where("type",'=',1);
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
        return $this->hasOne('App\Models\Image', 'itemid','id');
    }
}
//美食model
class Cate extends BaseModel
{
    protected $table = 'nz_travel_food';
    public function foodImg()
    {
        return $this->hasOne('App\Models\Image', 'itemid','id')->where("smalltype",3);
    }
}
class Feature extends  BaseModel
{
    protected $table = 'nz_travel_feature';
}


