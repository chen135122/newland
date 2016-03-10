<?php

namespace App\Models;

class Favourity_detail extends BaseModel
{
    protected $table = 'nz_favourity_detail';

    public function Typeid()
    {
        return $this->belongsTo('App\Models\Favourity_type', 'id');
    }
}
