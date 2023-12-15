<?php

namespace ACTTraining\LivewireCalendar\Commands;

use Illuminate\Console\Command;

class LivewireCalendarCommand extends Command
{
    public $signature = 'livewire-calendar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
