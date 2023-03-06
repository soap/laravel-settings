<?php

namespace Soap\AppSettings;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AppSettingsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('app-settings')
            ->hasConfigFile('app-settings')
            ->hasMigration('create_app_settings_table');
    }

    public function packageRegistered()
    {
        // bind setting storage
        $this->app->bind(
            'Soap\AppSettings\ISettingStorage',
            'Soap\AppSettings\EloquentSettingStorage'
        );
    }
}
