<?php

namespace App\Http\Controllers;

use App\Contracts\TestContract;
use Illuminate\Http\Request;
use App;
class Test1Controller extends Controller
{

    //
    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    public function index()
    {
         $test = App::make('test1');
         $test->callMe('123123');
        $this->test->callMe('TestController');
    }
}
