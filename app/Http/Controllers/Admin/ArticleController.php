<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article as Articles;
class ArticleController extends Controller
{
	public function article_list()
	{
		$data=Articles::data()->toArray();// dd($data);
		return view('admin/article_list',['data'=>$data]);
	}
	
	public function article_add(Request $request)
	{ 
		if($request->input('title'))
		{
			$all=$request->all();
			$result=Articles::insertData($all);
			dd($request);
			if($result){
				echo 1;
			}
		}
		else{		
		 $Category=Articles::dataCategory();
		 return view('admin/article_add',['category'=>$Category]);
		}
	}
	
	public function article_edit(Request $request)
	{
		if($request->input('articletitle')){
			$all=$request->all();
			$result=Articles::articleUpdate($all);
			if($result){
				echo 1;
			}
		}else{
	      $id=$request->input('id');
		  $data=Articles::data($id)->toArray(); 
		  return view('admin/article_add',['data'=>$data]);
		}
	}
	
	public function article_edit_post(Rquest $request)
	{
		echo $request->input('id');
	}
	
	
	
}