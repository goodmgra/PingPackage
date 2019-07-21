<?php
declare(strict_types=1);

namespace Airranged\PingPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Ping extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "airranged.ping";
    }
}
