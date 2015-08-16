<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
	//return View::make('hello');
//});
Route::get('test', function()
{
	return 'heoolo';
});
Route::get('/doc',function(){
    $docs = Doc::all();
    $list = ['docs'=>$docs];
    return View::make('article',$list);
});
Route::any('foo', function()
{
    return 'Hello World';
});
Route::resource('home','HomeController');
Route::resource('login','AuthController');//用户登录验证控制器类
Route::resource('signup','RegistController');//用户注册控制器类
Route::resource('user','UserController');//用户信息访问、修改类RESTful控制器

