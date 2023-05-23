<?php

namespace Chumbatainment\EventObjectCollection\Events;

use Chumbatainment\EventObjectCollection\ValueObjects\LocationId;

interface TransportEvent extends Event
{
    public function getDepartureLocationId(): LocationId;
    public function getDestinationLocationId(): LocationId;
}
