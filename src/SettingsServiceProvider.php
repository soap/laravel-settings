<?php

namespace Soap\Settings;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SettingsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('settings')
            ->hasConfigFile('settings')
            ->hasMigration('create_settings_table');
    }

    public function packageRegistered()
    {
        // bind setting storage
        $this->app->bind(
            'Soap\Settings\ISettingStorage',
            'Soap\Settings\EloquentSettingStorage'
        );
    }
}
