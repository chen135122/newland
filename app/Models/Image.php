<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends BaseModel
{
    protected $table = 'nz_image';
    protected $fillable = ['itemid', 'picurl', 'title', 'type'];
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}
