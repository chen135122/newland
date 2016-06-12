<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends BaseModel
{
    protected $table = 'nz_region';
    public static function getRegion($id)
    {
        $regions=\App\Models\Region::find($id);
        if(isset($regions))
            return $regions->name;
        else
            return null;
    }
}