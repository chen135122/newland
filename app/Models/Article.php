<?php

namespace App\Models;

class Article extends BaseModel
{
    protected $table = 'nz_article';

    public function users(){
        return [];
        return $this->belongsToMany('App\User','nz_favourity_detail','articleId','uid');
    }
}
