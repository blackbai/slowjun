<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
class TestController extends Controller{

    public function index(){
        $user = Users::find(3);
        $account = $user->account;
        dd($user->toArray());
    }




}