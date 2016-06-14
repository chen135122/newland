<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
class Faq extends BaseModel
{
    protected $table = 'nz_faq';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
}
