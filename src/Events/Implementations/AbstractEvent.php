<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events\Implementations;

use Chumbatainment\EventObjectCollection\Events\Event;
use Chumbatainment\EventObjectCollection\ValueObjects\AttendeeId;
use Chumbatainment\EventObjectCollection\ValueObjects\EventDescription;
use Chumbatainment\EventObjectCollection\ValueObjects\EventId;
use Chumbatainment\EventObjectCollection\ValueObjects\EventName;
use Chumbatainment\EventObjectCollection\ValueObjects\EventPriceTotal;
use Chumbatainment\EventObjectCollection\ValueObjects\EventType;
use Chumbatainment\EventObjectCollection\ValueObjects\Id;

abstract class AbstractEvent implements Event
{
    protected Id $id;
    protected EventId $eventId;
    protected EventType $type;
    protected EventName $name;
    protected EventDescription $description;
    /** @var AttendeeId[]  */
    protected array $attendees;
    protected EventPriceTotal $price;
    protected \DateTime $startDateTime;
    protected \DateTime $endDateTime;

    public function getId(): Id
    {
        return $this->id;
    }

    public function getEventId(): EventId
    {
        return $this->eventId;
    }

    public function getType(): EventType
    {
        return $this->type;
    }

    public function getName(): EventName
    {
        return $this->name;
    }

    public function getDescription(): EventDescription
    {
        return $this->description;
    }

    /** @return AttendeeId[] */
    public function getAttendees(): array
    {
        return $this->attendees;
    }

    public function getPrice(): EventPriceTotal
    {
        return $this->price;
    }

    public function getStartDateTime(): \DateTime
    {
        return $this->startDateTime;
    }
    public function getEndDateTime(): \DateTime
    {
        return $this->endDateTime;
    }
}