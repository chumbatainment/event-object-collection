<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events;

interface NightLifeEvent extends Event
{
    public function getLocationId(): ?string;
    public function getMinAge(): ?int;
}