<?php

namespace ACTTraining\LivewireCalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ACTTraining\LivewireCalendar\LivewireCalendar
 */
class LivewireCalendar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ACTTraining\LivewireCalendar\LivewireCalendar::class;
    }
}
