<?php

namespace VendorName\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

class Skeleton extends Facade
{

    /**
     * Get the registered name of the component in the IoC container.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
