<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;
class Study extends BaseModel
{
    protected $table = 'nz_school';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
    public function regions()
    {
        return $this->hasOne('App\Models\Region','id','region');
    }
    public function regions_city()
    {
        return $this->hasOne('App\Models\Region','id','city');
    }
    public function regions_district()
    {
        return $this->hasOne('App\Models\Region','id','district');
    }
    public function propertyImg()
    {
        return   $query= $this->belongsTo ('App\Models\Image', 'id','itemid')->where("type",'=',3);
    }

    public function getIsFavAttribute()
    {
        if(auth()->check()==false)
            return false;
        $user_id= auth()->user()->id;
        $article_id=$this->attributes['id'];
        $count=DB::table('nz_collection')->where('itemid',$article_id)->where('uid',$user_id)->where('type',3)->count();
        return $count>0?true:false;
    }
}
