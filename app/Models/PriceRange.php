<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceRange extends BaseModel
{
    protected $table = 'nz_travel_pricerange';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}
