<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   	public function request(Request $request)
   	{
   		echo '你好!'.($request->has('name')?$request->input('name'):'游客');
   	}

   	public function response()
   	{
   		return (new \App\Http\Controllers\Stu\StuController())->index();
   	}
}
