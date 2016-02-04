<?php

namespace App\Models;

class Property extends BaseModel
{
    protected $table = 'nz_house';

    public function regions()
    {
        return $this->belongsTo('App\Models\Region', 'region');
    }
}
