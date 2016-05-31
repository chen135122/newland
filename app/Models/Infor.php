<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


class Infor extends BaseModel
{
    protected $table = 'nz_infor';
    protected $dates = ['deleted_at'];
    use SoftDeletes;

}
