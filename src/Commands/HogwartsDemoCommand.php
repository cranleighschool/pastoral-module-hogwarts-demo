<?php

namespace FredBradley\HogwartsDemo\Commands;

use Illuminate\Console\Command;

class HogwartsDemoCommand extends Command
{
    public $signature = 'pastoral-module-hogwarts-demo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
