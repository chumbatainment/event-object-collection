<?php

namespace Chumbatainment\EventObjectCollection\Extensions\EventsAware\Event;

use Chumbatainment\EventObjectCollection\Events\Event\SiteSeeing as SiteSeeingOrigin;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareInterface;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareTrait;

class SiteSeeing extends SiteSeeingOrigin implements ChumbatainmentEventAwareInterface
{
    use ChumbatainmentEventAwareTrait;
}