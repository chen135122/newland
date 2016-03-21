<?php

namespace App\Models;

class Image extends BaseModel
{
    protected $table = 'nz_image';
    protected $fillable = ['itemid', 'picurl', 'title', 'type'];
}
