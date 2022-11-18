<?php

namespace FredBradley\HogwartsDemo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FredBradley\HogwartsDemo\HogwartsDemo
 */
class HogwartsDemo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \FredBradley\HogwartsDemo\HogwartsDemo::class;
    }
}
