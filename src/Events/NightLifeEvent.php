<?php

namespace Chumbatainment\EventObjectCollection\Events;

use Chumbatainment\EventObjectCollection\ValueObjects\Age;
use Chumbatainment\EventObjectCollection\ValueObjects\LocationId;

interface NightLifeEvent extends Event
{
    public function getLocationId(): LocationId;
    public function getMinAge(): Age;
}