<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends BaseModel
{
    protected $table = 'nz_category';
    protected $dates = ['deleted_at'];
    use SoftDeletes;

    public function getParentCategory()
    {
        if( $this->parent_id > 0 ){
            $categoryEntity = Category::find($this->parent_id);
            if( $categoryEntity == null )
                return '';
            return $categoryEntity->name;
        }
        return '';
    }
}
