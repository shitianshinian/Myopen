<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
	//
	public function picture_list()
	{
		return view('admin/picture_list');
	}


	public function picture_add()
	{
		return view('admin/picture_add');
	}

}