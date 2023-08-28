<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events;

interface SiteSeeingEvent extends Event
{
    public function getLocationId(): ?string;
    public function getMinAge(): ?int;
    public function getTransportId(): ?string;
    public function getReturnTransportId(): ?string;
}