<?php

if (! function_exists('settings')) {
    /**
     * Get app setting stored in db.
     *
     * @param  null  $default
     * @return mixed
     */
    function settings($key = null, $default = null)
    {
        $setting = app()->make('Soap\Settings\ISettingStorage');

        if (is_null($key)) {
            return $setting;
        }

        if (is_array($key)) {
            return $setting->set($key);
        }

        return $setting->get($key, $default);
    }
}
