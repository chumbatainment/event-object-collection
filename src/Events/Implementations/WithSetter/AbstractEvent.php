<?php

namespace Chumbatainment\EventObjectCollection\Events\Implementations\WithSetter;

use Chumbatainment\EventObjectCollection\Events\Implementations\AbstractEvent as AbstractEventWithoutSetter;
use Chumbatainment\EventObjectCollection\ValueObjects\EventDescription;
use Chumbatainment\EventObjectCollection\ValueObjects\EventId;
use Chumbatainment\EventObjectCollection\ValueObjects\EventName;
use Chumbatainment\EventObjectCollection\ValueObjects\EventPriceTotal;
use Chumbatainment\EventObjectCollection\ValueObjects\EventType;
use Chumbatainment\EventObjectCollection\ValueObjects\Id;

abstract class AbstractEvent extends AbstractEventWithoutSetter
{
    public function setId(Id $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function setEventId(EventId $eventId): static
    {
        $this->eventId = $eventId;
        return $this;
    }

    public function setName(EventName $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription(EventDescription $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function setAttendees(array $attendees): static
    {
        $this->attendees = $attendees;
        return $this;
    }

    public function setPrice(EventPriceTotal $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function setType(EventType $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function setStartDateTime(\DateTime $startDateTime): static
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }


    public function setEndDateTime(\DateTime $endDateTime): static
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }
}