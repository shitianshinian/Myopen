<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';    
    public function belongsToArticle()
    {
    	return $this->belongsTo('App\Model\Article','category_id','id');
    }
    
    
    
}
