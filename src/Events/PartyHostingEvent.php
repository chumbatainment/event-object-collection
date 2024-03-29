<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events;

interface PartyHostingEvent extends Event
{
    public function getLocationId(): ?string;
    public function getMinAge(): ?int;
    public function getMaxVisitorCapacity(): ?int;

}