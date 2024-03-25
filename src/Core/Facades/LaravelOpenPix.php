<?php

namespace PauloRLima9\LaravelOpenPix\Core\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelOpenPix extends Facade
{
    /**
     * Get registered facade block
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'openpix';
    }
}