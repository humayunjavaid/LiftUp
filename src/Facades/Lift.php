<?php

namespace Humayunjavaid\Lift\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Humayunjavaid\Lift\Lift
 */
class Lift extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Humayunjavaid\Lift\Lift::class;
    }
}
