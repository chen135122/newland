<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleHouse extends BaseModel
{
    protected $table = 'nz_salehouses';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}
