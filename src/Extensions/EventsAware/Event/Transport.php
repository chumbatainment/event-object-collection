<?php

namespace Chumbatainment\EventObjectCollection\Extensions\EventsAware\Event;

use Chumbatainment\EventObjectCollection\Events\Event\Transport as TransportOrigin;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareInterface;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareTrait;

class Transport extends TransportOrigin implements ChumbatainmentEventAwareInterface
{
    use ChumbatainmentEventAwareTrait;
}