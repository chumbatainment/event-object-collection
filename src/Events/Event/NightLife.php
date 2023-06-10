<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events\Event;

use Chumbatainment\EventObjectCollection\Events\NightLifeEvent;

class NightLife extends AbstractEvent implements NightLifeEvent
{
    protected ?string $locationId = null;
    protected ?int $minAge = null;

    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    public function setLocationId(?string $locationId): static
    {
        $this->locationId = $locationId;
        return $this;
    }


    public function getMinAge(): ?int
    {
        return $this->minAge;
    }

    public function setMinAge(?int $minAge): static
    {
        $this->minAge = $minAge;
        return $this;
    }

}