<?php

namespace Soap\AppSettings\Commands;

use Illuminate\Console\Command;

class AppSettingsCommand extends Command
{
    public $signature = 'laravel-app-settings';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
