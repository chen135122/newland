<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends BaseModel
{
    protected $table = 'nz_category';
    protected $dates = ['deleted_at'];
    use SoftDeletes;

}
