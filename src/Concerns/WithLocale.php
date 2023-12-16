<?php

namespace ACTTraining\LivewireCalendar\Concerns;

trait WithLocale
{
    protected ?string $locale = null;

    protected ?string $timeZone = null;

    protected int $firstDay = 0;

    public function locale(): string
    {
        if (is_null($this->locale)) {
            return config('app.locale');
        }

        return $this->locale;
    }

    public function timeZone(): string
    {
        if (is_null($this->timeZone)) {
            return config('app.timezone');
        }

        return $this->timeZone;
    }

    public function setTimeZone(string $timeZone = 'local'): static
    {
        $this->timeZone = $timeZone;

        return $this;
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