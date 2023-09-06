<?php

namespace Humayunjavaid\Lift\Commands;

use Illuminate\Console\Command;

class LiftCommand extends Command
{
    public $signature = 'liftup';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
