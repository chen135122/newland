<?php

namespace App\Models;

class Travel extends BaseModel
{
    protected $table = 'nz_travel_route';

    public function day()
    {
        return $this->hasOne('App\Models\TravelDay', 'route_id','id');
    }
    public function cate()
    {
        return $this->hasOne('App\Models\Cate', 'route_id','id');
    }
    public function feature()
    {
        return $this->hasOne('App\Models\Feature', 'route_id','id');
    }

}
class TravelDay extends BaseModel
{
    protected $table = 'nz_travel_day';
    public function sightspot()
    {
        return $this->hasOne('App\Models\SightSpot', 'day_id','id')->orderBy("sort_num","asc");
    }

}
//景点model
class SightSpot extends BaseModel
{
    protected $table = 'nz_travel_sightspot';
    public function hasimg()
    {
        return $this->hasOne('App\Models\Imge', 'out_id','id')->where("type","1")->orderBy("sort_num","desc");
    }
}
//美食model
class Cate extends BaseModel
{
    protected $table = 'nz_travel_cate';
}
class Imge extends BaseModel
{
    protected $table = 'nz_travel_img';
}
class Feature extends  BaseModel
{
    protected $table = 'nz_travel_feature';
}


