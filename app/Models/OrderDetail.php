<?php
/**
 * Created by chitunet.com.
 * User: yin
 * Date: 2016/3/1
 * Time: 15:57
 */
namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends BaseModel
{
    protected $table = 'nz_order_detail';
    protected $dates = ['deleted_at'];
    use SoftDeletes;
//    public $timestamps=false;
}