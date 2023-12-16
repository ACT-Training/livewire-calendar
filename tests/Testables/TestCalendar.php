<?php

namespace ACTTraining\LivewireCalendar\Tests\Testables;

use ACTTraining\LivewireCalendar\LivewireCalendar;

class TestCalendar extends LivewireCalendar
{

    public function getEventsProperty(): array
    {
        return [];
    }

    public function eventClick($info): void
    {
        //
    }
}