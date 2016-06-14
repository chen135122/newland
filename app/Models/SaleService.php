<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleService extends BaseModel
{
    protected $table = 'nz_saleservice';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}
