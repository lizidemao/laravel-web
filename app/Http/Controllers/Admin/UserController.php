<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$res = $user->limit($Page->firstRow.','.$Page->listRows)->select();
        /*$data = Users::get()->paginate(5)->toArray();
        var_dump($data);die;
        foreach($data as $k=>$v){
            if($data[$k]['auth']==1){
                $data[$k]['auth'] = "管理员";
            }else{
                $data[$k]['auth'] = "普通用户";
            }
        } */
        $data =DB::table('users')->paginate(3);
        foreach($data as $k=>$v){
            if($data[$k]->auth==1){
                $data[$k]->auth = "管理员";
            }else{
                $data[$k]->auth = "普通用户";
            }
        }


       // var_dump($data);
      
        return view('Admin/User/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/User/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('users')->where('id',$id)->delete();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Users::where('id',$id)->get()->toArray()[0];

        return view('Admin/User/edit',['data'=>$data]);
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
        if($request->password==$request->surepass){
            $input = $request->only(['name','email','password','auth','status']);
            $input["password"]=md5($input["password"]);
            $data = DB::table('users')->where('id',$id)->update($input);
            return redirect('/admin/users');
        }else{
            echo "<h2>修改失败！两次输入的密码不一致！</h2>";
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
        


    }
}
