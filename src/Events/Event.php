<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events;

use Chumbatainment\EventObjectCollection\ValueObjects\AttendeeId;
use Chumbatainment\EventObjectCollection\ValueObjects\EventDescription;
use Chumbatainment\EventObjectCollection\ValueObjects\EventId;
use Chumbatainment\EventObjectCollection\ValueObjects\EventName;
use Chumbatainment\EventObjectCollection\ValueObjects\EventPriceTotal;
use Chumbatainment\EventObjectCollection\ValueObjects\EventType;
use Chumbatainment\EventObjectCollection\ValueObjects\Id;

interface Event
{
    public function getId(): Id;

    public function getEventId(): EventId;

    public function getType(): EventType;

    public function getName(): EventName;

    public function getDescription(): EventDescription;

    /**
     * @return AttendeeId[]
     */
    public function getAttendees(): array;

    public function getPrice(): EventPriceTotal;
    public function getStartDateTime(): \DateTime;
    public function getEndDateTime(): \DateTime;

}