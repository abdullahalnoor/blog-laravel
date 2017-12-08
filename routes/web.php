<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// // });

route::group(['namespace'=>'Front','middleware'=>['web']],function(){
	Route::get('blog/{slug}',['as'=>'single','uses'=>'BlogController@getSinglePost']);
	// ->where('slug','[w\d\-\_]+')
	route::get('/','HomeController@index');
	route::get('/about','HomeController@about');
	route::get('/contact','HomeController@contact');
	route::post('comment/{post_id}',['uses'=>'CommentController@store','as'=>'comment.store']);
});

route::group(['namespace'=>'Admin','middleware'=>['web']],function(){
	route::resource('post','PostController');
	route::resource('category','CategoryController',['except'=>'create']);
	route::resource('tag','TagController',['except'=>'create']);
});
