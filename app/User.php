<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "nz_customers";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mobile'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    public function getAuthPassword()
//    {
//        return $this->password;
//    }

    public function articles(){
        return $this->belongsToMany('App\Models\Article','nz_collection','uid','itemid')->withPivot('type');
    }
}
