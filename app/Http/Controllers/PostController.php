<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create(Request $request){

        echo    response()->json(['sb'=>1]);

//        $response = new Response();
//        $response->withCookie(cookie('website','LaravelAcademy.org',1));
//        //如果想要cookie长期有效使用如下方法
//
//
//        echo $request->path();
//        echo '<br>';
//        echo $request->url();
//        echo '<br>';
//        echo $request->method();
//        echo '<br>';
//        if($request->has('age')){
//            echo 'true';
//        }
//        echo '<br>';
//        print_r($request->all());
//        print_r($request->only('age'));
//        print_r($request->except('name'));
//        print_r($request->input('age'));
//        print_r($request->cookie());

    }

    public function getLastRequest(Request $request){
        $request->flash();
    }
}
