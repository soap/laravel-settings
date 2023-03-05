<?php

namespace Soap\AppSettings;

use Soap\AppSettings\Commands\AppSettingsCommand;
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
            ->hasConfigFile()
            ->hasMigration('create_app_settings_table')
            ->hasCommand(AppSettingsCommand::class);
    }
}