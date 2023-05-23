<?php

namespace Chumbatainment\EventObjectCollection\Events;

use Chumbatainment\EventObjectCollection\ValueObjects\Age;
use Chumbatainment\EventObjectCollection\ValueObjects\LocationId;

interface PartyHostingEvent extends Event
{
    public function getLocation(): LocationId;
    public function getMinAge(): Age;
    public function getMaxVisitorCapacity(): Number;

}