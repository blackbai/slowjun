<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
//        echo 1;die();
        return view('home.index');
    }


    public function test(){
        return view('home.index');
    }
}
