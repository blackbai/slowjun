<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    /**
     * 获取系统设置
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $setting = Setting::find(1);
        return view('admin.setting',compact('setting',$setting));
    }

    /**
     * 更新配置
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request,$id){
        $data = $request->all();
        $setting = Setting::find($id);
        $setting->update($data);
        return view('admin.setting',compact('setting',$setting));
    }

}
