<?php

namespace App\Models;
use DB;
class StudySP extends BaseModel
{
    protected $table = 'nz_school_sp';
    public function propertyImg()
    {
        return   $query= $this->belongsTo ('App\Models\Image', 'id','itemid')->where("type",'=',10);
    }
    public function getIsFavAttribute()
    {
        if(auth()->check()==false)
            return false;
        $user_id= auth()->user()->id;
        $article_id=$this->attributes['id'];
        $count=DB::table('nz_collection')->where('itemid',$article_id)->where('uid',$user_id)->where('type',5)->count();
        return $count>0?true:false;
    }
}
