<?php

namespace Chumbatainment\EventObjectCollection\Extensions\EventsAware\Event;

use Chumbatainment\EventObjectCollection\Events\Event\NightLife as NightLifeOrigin;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareInterface;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareTrait;

class NightLife extends NightLifeOrigin implements ChumbatainmentEventAwareInterface
{
    use ChumbatainmentEventAwareTrait;
}