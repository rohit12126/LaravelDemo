<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Pool extends Model
{
    /*primary key for table*/
    protected $primaryKey = 'pool_id';

    public function category(){
    	return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }	
}
