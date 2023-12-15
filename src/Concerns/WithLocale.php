<?php

namespace ACTTraining\LivewireCalendar\Concerns;

trait WithLocale
{
    protected string $locale = 'en';

    protected int $firstDay = 0;

    public function locale(): string
    {
        return $this->locale;
    }

    public function setLocale(string $locale = 'en'): static
    {
        $this->locale = $locale;

        return $this;
    }

    public function firstDay(): int
    {
        return $this->firstDay;
    }

    public function setFirstDay(int $firstDay): static
    {
        $this->firstDay = $firstDay;

        return $this;
    }

}