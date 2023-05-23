<?php

namespace Chumbatainment\EventObjectCollection\Events;

use Chumbatainment\EventObjectCollection\ValueObjects\Age;

interface SightSeeingEvent extends Event
{
    public function getLocation(): Location;
    public function getMinAge(): Age;
    public function getGetTransportToLocation(): TransportEvent;
    public function getGetTransportFromLocation(): TransportEvent;
}