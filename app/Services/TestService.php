<?php

namespace App\Services;

use App\Contracts\TestContract;

class TestService implements TestContract
{
    public function callMe($controller)
    {
        dd('Call Me From TestServiceProvider In '.$controller);
    }
}