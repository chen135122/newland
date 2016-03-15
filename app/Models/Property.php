<?php

namespace App\Models;

class Property extends BaseModel
{
    protected $table = 'nz_house';

    public function developers()
    {
        return $this->hasOne('App\Models\Developer','id','developer_id');
    }
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
}
