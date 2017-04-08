<?php

namespace  App\Services;

use App\Contracts\TestContract;

class Test1Service implements TestContract{
    public function callMe($controller)
    {
       dd('sbsbsbssbsbsbs');
    }
}