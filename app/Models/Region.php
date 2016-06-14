<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Region extends BaseModel
{
    protected $table = 'nz_region';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
    public static function getRegion($id)
    {
        $regions=\App\Models\Region::find($id);
        if(isset($regions))
            return $regions->name;
        else
            return null;
    }
}