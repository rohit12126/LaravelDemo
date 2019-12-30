<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pool;
class Category extends Model
{
    /*primary key for table*/
    protected $primaryKey = 'category_id';

    public function pools(){
    	return $this->hasMany(Pool::class, 'category_id', 'category_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_category_id');
    }

    public function child()
    {
        return $this->hasOne(Category::class, 'parent_category_id');
    }

    /* Accessors */
    public function getCategoryNameAttribute($value){
        return ucfirst($value);
    }
    
    /* Mutators */
    public function setCategoryNameAttribute($value){
        return $this->attributes['category_name'] = strtoupper($value);
    }
}
