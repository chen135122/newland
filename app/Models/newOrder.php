<?php
/**
 * Created by chitunet.com.
 * User: yin
 * Date: 2016/3/1
 * Time: 15:57
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newOrder extends BaseModel
{
    protected $table = 'nz_travel_order';
    public function travel()
    {
        return $this->belongsTo('App\Models\Travel','route_id','id');
    }
}