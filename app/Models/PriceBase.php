<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceBase extends BaseModel
{
    protected $table = 'nz_travel_pricebase';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}
