<?php

namespace Chumbatainment\EventObjectCollection\Extensions\EventsAware\Event;

use Chumbatainment\EventObjectCollection\Events\Event\PartyHosting as PartyHostingOrigin;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareInterface;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareTrait;

class PartyHosting extends PartyHostingOrigin implements ChumbatainmentEventAwareInterface
{
    use ChumbatainmentEventAwareTrait;
}