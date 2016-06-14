<?php
/**
 * Created by chitunet.com.
 * User: yin
 * Date: 2016/3/1
 * Time: 15:57
 */
namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
class NewOrder extends BaseModel
{
    protected $table = 'nz_order';
    protected $guarded=['fileData'];
    protected $dates = ['deleted_at'];
    use SoftDeletes;
    public function travel()
    {
        return $this->belongsTo('App\Models\Travel','itemid','id');
    }
    public function detail()
    {
        return $this->hasOne('App\Models\OrderDetail','orderid','id');
    }
}