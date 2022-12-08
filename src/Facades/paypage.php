<?php


namespace Clickpaysa\Laravel_package\Facades;


use Illuminate\Support\Facades\Facade;

class paypage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'paypage';
    }

}
