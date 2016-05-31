<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends BaseModel
{
    protected $table = 'nz_customers';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}