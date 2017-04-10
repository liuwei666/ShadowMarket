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

// Route::get('/foo',function(){
// 	return 'get提交';
// });

// Route::post('/foo',function(){
// 	return 'post提交';
// });

// Route::put('/foo',function(){
// 	return 'put提交';
// });

// Route::delete('/foo',function(){
// 	return 'delete提交';
// });

// Route::match(['get','post'],'/hello',function(){
// 	return 'hello world';
// });

// Route::get('test/{id?}/{name?}',function($id = 6,$name = '刘伟'){
// 	return 'test'.$id.$name;
// });

// Route::get('/test1/{id?}',function($id = null){
// 	return 'test1'.$id;
// })->where('id','[0-9]+');

// Route::get('/user/in','UserController@index');
// Route::get('/user/sh','UserController@show');

// Route::get('/foo',function(){
// 	return 'get提交';
// });

// Route::post('/foo',function(){
// 	return 'post提交';
// });

// Route::put('/foo',function(){
// 	return 'put提交';
// });

// Route::delete('/foo',function(){
// 	return 'delete提交';
// });

// Route::match(['get','post'],'/hello',function(){
// 	return 'hello world';
// });

// Route::get('test/{id?}/{name?}',function($id = 6,$name = '刘伟'){
// 	return 'test'.$id.$name;
// });

// Route::get('/test1/{id?}',function($id = null){
// 	return 'test1'.$id;
// })->where('id','[0-9]+');

// Route::get('/user/in','UserController@index');
// Route::get('/user/sh','UserController@show');

Route::get('/foo',function(){
	return 'get提交';
});

Route::post('/foo',function(){
	return 'post提交';
});

Route::put('/foo',function(){
	return 'put提交';
});

Route::delete('/foo',function(){
	return 'delete提交';
});

Route::match(['get','post'],'/hello',function(){
	return 'hello world';
});

Route::get('test/{id?}/{name?}',function($id = 6,$name = '刘伟'){
	return 'test'.$id.$name;
});

Route::get('/test1/{id?}',function($id = null){
	return 'test1'.$id;
})->where('id','[0-9]+');


//====================================第二节控制器路由
Route::get('/user/in','UserController@index');
Route::get('/user/sh','UserController@show');

Route::get('/stu','Stu\StuController');

//====================================第三节请求响应
Route::get('/demo1','DemoController@request');
//响应
Route::get('/demo2','DemoController@response');

//=====================================第四节带模板继承的用户管理