<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events\Event;

use Chumbatainment\EventObjectCollection\Events\PartyHostingEvent;

class PartyHosting extends AbstractEvent implements PartyHostingEvent
{
    protected ?string $locationId = null;
    protected ?int $minAge = null;
    protected ?int $maxVisitorCapacity = null;

    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    public function setLocationId(?string $locationId): PartyHosting
    {
        $this->locationId = $locationId;
        return $this;
    }

    public function getMinAge(): ?int
    {
        return $this->minAge;
    }

    public function setMinAge(?int $minAge): PartyHosting
    {
        $this->minAge = $minAge;
        return $this;
    }

    public function getMaxVisitorCapacity(): ?int
    {
        return $this->maxVisitorCapacity;
    }

    public function setMaxVisitorCapacity(?int $maxVisitorCapacity): PartyHosting
    {
        $this->maxVisitorCapacity = $maxVisitorCapacity;
        return $this;
    }

}