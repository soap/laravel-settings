<?php

namespace Soap\AppSettings\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Soap\AppSettings\AppSettingsServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestCase extends Orchestra
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate', [
            '--force' => true,
            '--path' => __DIR__ . '/../database/migrations',
            '--realpath' => true,
        ])->run();

    }

    protected function getPackageProviders($app)
    {
        return [
            AppSettingsServiceProvider::class,
        ];
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'AppSettings' => 'Soap\AppSettings\Facades\AppSettings',
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        config()->set('app-settings.table', 'settings');

    }
}
