<?php

namespace ACTTraining\LivewireCalendar\Tests\Testables;

use ACTTraining\LivewireCalendar\LivewireCalendar;

class TestCalendar extends LivewireCalendar
{
    public function events(): array
    {
        return [];
    }

    public function eventClick($info): void
    {
        //
    }
}
