<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends BaseModel
{
    protected $table = 'nz_workmate';
    protected $dates = ['deleted_at'];
    use SoftDeletes;

}
