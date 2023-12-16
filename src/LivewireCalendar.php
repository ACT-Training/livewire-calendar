<?php

namespace ACTTraining\LivewireCalendar;

use ACTTraining\LivewireCalendar\Concerns\WithBusinessHours;
use ACTTraining\LivewireCalendar\Concerns\WithDateAndTime;
use ACTTraining\LivewireCalendar\Concerns\WithDateNavigation;
use ACTTraining\LivewireCalendar\Concerns\WithEventDisplay;
use ACTTraining\LivewireCalendar\Concerns\WithLocale;
use ACTTraining\LivewireCalendar\Concerns\WithNow;
use ACTTraining\LivewireCalendar\Concerns\WithToolbar;
use ACTTraining\LivewireCalendar\Concerns\WithView;
use Livewire\Component;

abstract class LivewireCalendar extends Component
{
    use WithBusinessHours;
    use WithDateAndTime;
    use WithDateNavigation;
    use WithEventDisplay;
    use WithLocale;
    use WithNow;
    use WithToolbar;
    use WithView;

    abstract public function getEventsProperty(): array;

    abstract public function eventClick($info): void;

    public function booted(): void
    {
        $this->config();
    }

    public function config(): void
    {
        //
    }

    public function render()
    {
        return view('livewire-calendar::calendar');
    }
}
