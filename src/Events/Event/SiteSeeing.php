<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events\Event;

use Chumbatainment\EventObjectCollection\Events\SiteSeeingEvent;

class SiteSeeing extends AbstractEvent implements SiteSeeingEvent
{
    protected ?string $locationId = null;
    protected ?int $minAge = null;
    protected ?string $transportId = null;
    protected ?string $returnTransportId = null;

    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    public function setLocationId(?string $locationId): static
    {
        $this->locationId = $locationId;
        return $this;
    }

    public function getMinAge(): ?int
    {
        return $this->minAge;
    }

    public function setMinAge(?int $minAge): static
    {
        $this->minAge = $minAge;
        return $this;
    }

    public function getTransportId(): ?string
    {
        return $this->transportId;
    }

    public function setTransportId(?string $transportId): static
    {
        $this->transportId = $transportId;
        return $this;
    }

    public function getReturnTransportId(): ?string
    {
        return $this->returnTransportId;
    }

    public function setReturnTransportId(?string $returnTransportId): static
    {
        $this->returnTransportId = $returnTransportId;
        return $this;
    }
}