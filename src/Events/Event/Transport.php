<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events\Event;

use Chumbatainment\EventObjectCollection\Events\TransportEvent;

class Transport extends AbstractEvent implements TransportEvent
{
    protected ?string $departureLocationId = null;
    protected ?string $destinationLocationId = null;

    public function getDepartureLocationId(): ?string
    {
        return $this->departureLocationId;
    }

    public function setDepartureLocationId(?string $departureLocationId): static
    {
        $this->departureLocationId = $departureLocationId;
        return $this;
    }

    public function getDestinationLocationId(): ?string
    {
        return $this->destinationLocationId;
    }

    public function setDestinationLocationId(?string $destinationLocationId): static
    {
        $this->destinationLocationId = $destinationLocationId;
        return $this;
    }
}