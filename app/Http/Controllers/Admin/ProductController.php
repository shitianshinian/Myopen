<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	//
	public function product_list()
	{
		return view('admin/picture_list');
	}


	public function product_add()
	{
		return view('admin/picture_add');
	}
	
	public function product_category()
	{
		return view('admin/product_category');
	}

}