<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favourity_detail extends BaseModel
{

    const TYPE_HOUSE = 0;
    protected $table = 'nz_collection';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
//    public $timestamps = false;

    public static function getTypeArray(){
        return ['1'=>'房产置业','2'=>'国际旅游','3'=>'移民留学','4'=>'新闻资讯'];
    }

    public static function getLinkUrl(){
        return ['1'=>'house','2'=>'tour','3'=>'study','4'=>'news'];
    }
    public function getType()
    {

        return $this->hasOne(User::className(), ['id' => 'uid']);
    }
}
