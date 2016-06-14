<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelCategory extends BaseModel
{
    protected $table = 'nz_category';
    protected $dates = ['deleted_at'];
    use SoftDeletes;

    // public function regions()
    // {
    // return $this->belongsTo('App\Models\Region', 'region');
    // }
}
