<?php

namespace Svanthuijl\Icepay\Facades;

use Illuminate\Support\Facades\Facade;

class Icepay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Svanthuijl\Icepay\Services\IcepayService::class;
    }
}
