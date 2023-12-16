<?php

namespace ACTTraining\LivewireCalendar\Concerns;

trait WithToolbar
{
    protected ?array $headerToolbar = null;

    protected ?array $footerToolbar = null;

    public function headerToolbar(): ?array
    {
        return $this->headerToolbar;
    }

    public function setHeaderToolbar($headerToolbar = null): static
    {
        $this->headerToolbar = $headerToolbar;

        return $this;
    }

    public function footerToolbar(): ?array
    {
        return $this->footerToolbar;
    }

    public function setFooterToolbar($footerToolbar = null): static
    {
        $this->footerToolbar = $footerToolbar;

        return $this;
    }
}
