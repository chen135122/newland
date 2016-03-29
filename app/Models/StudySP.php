<?php

namespace App\Models;

class StudySP extends BaseModel
{
    protected $table = 'nz_school_sp';
    public function propertyImg()
    {
        return   $query= $this->belongsTo ('App\Models\Image', 'id','itemid')->where("type",'=',10);
    }
}
