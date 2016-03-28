<?php

namespace App\Models;
use DB;

class Article extends BaseModel
{
    protected $table = 'nz_article';

    public function users(){
        return $this->belongsToMany('App\User', 'nz_collection', 'itemid', 'uid')->withPivot('type');
    }

    public function getIsFavAttribute()
    {
        if(auth()->check()==false)
            return false;
        $user_id= auth()->user()->id;
        $article_id=$this->attributes['id'];
        $count=DB::table('nz_collection')->where('itemid',$article_id)->where('uid',$user_id)->where('type',4)->count();
        return $count>0?true:false;
    }
}
