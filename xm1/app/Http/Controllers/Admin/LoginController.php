<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\User;


class LoginController extends Controller
{
    public function index()
    {
    	return view('Admin.login');
    }

    public function dologin(Request $request)
    {
    	//实例化模型
    	$user = new User();
    	//调用模型中的验证用户的方法
    	$ob = $user->checkUser($request);
    	if($ob){
    		session(['admiuser'=>$ob]);
    		return redirect('/admin/demo3');
    	}else{
    		return back()->with('msg','登录失败：用户名或密码不正确');
    	}
    }
}
