<?php

namespace VoyagerMedia\Facades;

use Illuminate\Support\Facades\Facade;

class VoyagerMedia extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'VoyagerMedia';
    }
}
