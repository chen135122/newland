<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends BaseModel
{
    protected $table = 'nz_banner';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}

