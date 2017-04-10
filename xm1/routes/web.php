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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/foo',function(){
	return 'qqqq';
});

Route::post('/foo',function(){
	return '刘伟是个大娘炮';
});

Route::put('/foo',function(){
	return 'put提交方式';
});

Route::delete('/foo',function(){
	return 'DELETE提交方式';
});

Route::match(['get','post'],'/hello',function(){
	return 'post';
});

// Route::resource('/stu','Stu\StuController');


// ========================================第二节控制器路由
Route::get('/user/in','UserController@index');
Route::get('/user/sh','UserController@show');


Route::resource('/stu','Stu\StuController');



// =========================================第三节请求响应
// 请求
Route::get('/demo1','DemoController@request');
//响应
Route::get('/demo2','DemoController@response');


// =========================================第四节带模板继承的用户管理
//后台首页
Route::resource('/demo3','Admin\AdminController');
// 用户管理
Route::resource('/demo4','User\UserController');


// 文件上传
Route::get('/upload','upload\UploadController@index');
Route::post('/doupload','upload\UploadController@doupload');



