<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * 用户list
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $users = User::select('name','email')->orderby('id','desc')->all()->paginate(1);
        return view('admin.users',compact('users',$users));
    }

    /**
     * 创建用户
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request){
        $data = $request->all();
        return User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => bcrypt($data->password),
        ]);
    }

    /**
     * 修改用户
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request,$id){
        $data = $request->all();
        $user = User::find($id);
        $user->update($data);
        return view('admin.users');
    }

    /**
     * 删除用户
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(Request $request, $id){
        $user = User::find($id);
        $user->delete();
        return view('admin.users');
    }

    /**
     * 表单验证
     * @param array $data
     * @return mixed
     */
    public function validate(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
}
