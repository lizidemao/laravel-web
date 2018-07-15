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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::prefix('/')->namespace("Home")->group(function(){
	
	//加载前台页面的资源路由
	Route::resource("/","IndexController");

	//加载项目
	Route::resource("/item","ItemController");

	//加载作品
	Route::resource("/work","WorkController");

	//加载作品
	Route::resource("/message","MessageController");

	//加载博客
	Route::resource("/blog","BlogController");

	//加载联系
	Route::resource("/contact","ContactController");

	/*//自定义登录
	Route::get('/index/login', 'LoginController@login');
	Route::resource("/login","LoginController");

	//自定义注册
	Route::get('/index/doregister', 'LoginController@doRegister');
	Route::resource("/doregister","LoginController");*/


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function(){
	//加载后台主页页面的资源路由
	Route::resource("/index","IndexController");

	//加载后台浏览用户的资源路由
	Route::resource("/users","UserController");

	//加载后台添加用户的资源路由
	Route::resource("/create","UserController");

	//编辑用户的资源路由
	Route::resource("/edit","UserController");

	//执行编辑编辑用户的资源路由
	Route::resource("/update","UserController");

	//留言管理的资源路由
	Route::resource("/massage","MassageController");

	//版块管理的资源路由
	Route::resource("/section","SectionController");

	//文章管理的资源路由
	Route::resource("/article","ArticleController");

	//文章管理的资源路由
	Route::resource("/web","WebController");
	
	
});


