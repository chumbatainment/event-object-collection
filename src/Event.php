<?php

namespace Bczopp\EventObjectCollection;

use Bczopp\EventObjectCollection\ValueObjects\Age;
use Bczopp\EventObjectCollection\ValueObjects\AttendeeId;
use Bczopp\EventObjectCollection\ValueObjects\EventDescription;
use Bczopp\EventObjectCollection\ValueObjects\EventName;
use Bczopp\EventObjectCollection\ValueObjects\EventPricePerPerson;
use Bczopp\EventObjectCollection\ValueObjects\EventType;
use DateTime;

interface Event extends MinimalEvent
{
    public function getType(): EventType;

    public function getName(): EventName;

    public function getDescription(): EventDescription;

    public function getStart(): DateTime;

    public function getEnd(): DateTime;

    public function getPricePerPerson(): ?EventPricePerPerson;

    /**
     * @return AttendeeId[]
     */
    public function getAttendees(): array;

    public function getAgeMin(): ?Age;

    public function hasAgeMin(): bool;

    public function getAgeMax(): ?Age;

    public function hasAgeMax(): bool;


}