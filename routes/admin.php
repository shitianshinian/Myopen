<?php


// Route::get('/', function () {
//     //return view('welcome');
// });
	
Route::group(['middleware' => 'admin'], function () { 



Route::any('login', ['uses' => 'Admin\LoginController@login']);
Route::any('index', ['uses' => 'Admin\IndexController@index']);
Route::any('welcome', ['uses' => 'Admin\IndexController@welcome']);
##文章管理
Route::any('article_list',['uses' => 'Admin\ArticleController@article_list']);
Route::any('article_add', ['uses' => 'Admin\ArticleController@article_add']);
Route::any('article_edit',['uses' => 'Admin\ArticleController@article_edit']);
Route::any('article_edit_post',['uses' => 'Admin\ArticleController@article_edit_post']);
##图片管理
Route::any('picture_list', ['uses' => 'Admin\PictureController@picture_list']);
Route::any('picture_add', ['uses' => 'Admin\PictureController@picture_add']);
Route::any('product_category', ['uses' => 'Admin\ProductController@product_category']);



});