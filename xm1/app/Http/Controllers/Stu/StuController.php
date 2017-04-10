<?php

namespace App\Http\Controllers\Stu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class StuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //原生sql语句语法
        // $list = DB::select('select * from user');s
        //查询构造器形式
        $list = DB::table('user')->get();

        // var_dump($list);
        return view('Stu.index',['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Stu.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取所有用户提交的信息
        $data = $request->all();
        //只要指定的字段
        $data = $request->only('name','age','sex');
        //添加数据到user表，返回最后生成的数据的自增id
        $row = DB::table('user')->insertGetId($data);
        if($row>0){
            return redirect('/stu')->with('info','添加成功');
        }else{
            return redirect('/stu/create')->with('info','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return ('111111111');
        $row = DB::table('user')->where('uid','=',$id)->first();

        return view('Stu.edit',['ob'=>$row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only('name','age','sex');
        // dd($data);
        $row = DB::table('user')->where('uid',$id)->update($data);
        if($row>0){
            return redirect('/stu')->with('info', '修改成功!');
        }else{
            return redirect("/stu/{$id}/edit")->with('info', '修改失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd(111);
        $row = DB::table('user')->where('uid',$id)->delete();
        if($row>0){
            return redirect('/stu')->with('info','删除成功');
        }else{
            return redirect('/stu')->with('info','删除失败');
        }
    }
}
