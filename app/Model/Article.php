<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table='article';
	protected $fillable = [
			'title',
		
	];
	public function hasOneCategory()
	{
		return $this->hasOne('App\Model\Category','category_id','category_id');
	}

	
    public static function data($id=null)
    {	
    	//$data=Article::find(1)->hasOneCategory; 
    	
//     	$data=Article::whereHas('hasOneCategory',function($q){})->get();
    	//$data=Article::paginate(1);
    	if($id)
    	{
    	  $data=Article::with('hasOneCategory')->find($id);
    	}else{
    	  $data=Article::with('hasOneCategory')->paginate(10);
    	}
    	return $data;
    }
    
    public static function articleUpdate($data)
    {
    	$a=Article::find($data['id']);
    	$a->title=$data['articletitle'];
    	return $a->save();	
    }
    
    public static function dataCategory(){
    	return Category::all()->toArray(); 
    }
    
    public static function  insertData($array)
    {
    	$array2['title']=$array['title'];
    	return   Article::firstOrCreate($array2);
    }
}
