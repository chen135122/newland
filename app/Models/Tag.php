<?php

namespace App\Models;

class Tag extends BaseModel
{
    protected $table = 'nz_tags';
    public static function getTag($tagsid)
    {

        $tagsArray=explode(',', $tagsid);
        $tagsArray= array_filter($tagsArray);
        $tagsList=\App\Models\Tag::where("id",">",0);
        $tagsList=$tagsList->Wherein("id",$tagsArray);
        return $tagsList;
    }
}