<?php

namespace Soap\Settings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\AppSettings\AppSettings
 */
class Settings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\Settings\EloquentSettingStorage::class;
    }
}
