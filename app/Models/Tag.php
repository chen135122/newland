<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends BaseModel
{
    protected $table = 'nz_tags';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
    public static function getTag($tagsid)
    {

        $tagsArray=explode(',', $tagsid);
        $tagsArray= array_filter($tagsArray);
        $tagsList=\App\Models\Tag::where("id",">",0);
        $tagsList=$tagsList->Wherein("id",$tagsArray);
        return $tagsList;
    }

    public static function getTop2Tag($tagsid)
    {

        $tagsArray=explode(',', $tagsid);
        $tagsArray= array_filter($tagsArray);
        $tagsList=\App\Models\Tag::Wherein("id",$tagsArray)->take(2);
        return $tagsList;
    }
}