<?php

namespace Soap\AppSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\AppSettings\AppSettings
 */
class AppSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\AppSettings\EloquentSettingStorage::class;
    }
}