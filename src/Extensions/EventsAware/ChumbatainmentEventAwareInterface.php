<?php

namespace Chumbatainment\EventObjectCollection\Extensions\EventsAware;

use Chumbatainment\EventObjectCollection\Events\Event;

interface ChumbatainmentEventAwareInterface
{
    /**
     * @return Event[]
     */
    public function getEmbeddedEvents(): array;
}