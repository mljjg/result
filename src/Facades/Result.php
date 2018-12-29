<?php

namespace ML\Result\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Created by PhpStorm.
 * User: jjg
 * Date: 2018-12-29
 * Time: 17:01
 */
class Result extends Facade
{

    protected static function getFacadeAccessor()
    {
        return "result";
    }

}