<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events;

interface TransportEvent extends Event
{
    public function getDepartureLocationId(): ?string;
    public function getDestinationLocationId(): ?string;
}
