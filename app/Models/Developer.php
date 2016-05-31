<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
class Developer extends BaseModel
{
    protected $table = 'nz_developers';
    protected $dates = ['deleted_at'];
    use SoftDeletes;

}
