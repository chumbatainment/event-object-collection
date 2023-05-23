<?php

declare(strict_types=1);

namespace Bczopp\EventObjectCollection\BaseObjects;

use Bczopp\EventObjectCollection\Event;
use Bczopp\EventObjectCollection\ValueObjects\Age;
use Bczopp\EventObjectCollection\ValueObjects\AttendeeId;
use Bczopp\EventObjectCollection\ValueObjects\EventDescription;
use Bczopp\EventObjectCollection\ValueObjects\EventName;
use Bczopp\EventObjectCollection\ValueObjects\EventPricePerPerson;
use Bczopp\EventObjectCollection\ValueObjects\EventType;
use Bczopp\EventObjectCollection\ValueObjects\Id;
use DateTime;

class AbstractBaseEvent extends AbstractMinimalEvent implements Event
{
    protected EventType $type;
    protected ?EventName $name = null;
    protected ?EventDescription $description = null;
    protected DateTime $start;
    protected DateTime $end;
    protected ?EventPricePerPerson $pricePerPerson = null;
    /**
     * @var AttendeeId[]
     */
    protected array $attendees = [];
    protected ?Age $ageMin = null;
    protected ?Age $ageMax = null;


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

    public function getStart(): DateTime
    {
        return $this->start;
    }

    public function getEnd(): DateTime
    {
        return $this->end;
    }

    public function getPricePerPerson(): ?EventPricePerPerson
    {
        return $this->pricePerPerson;
    }

    /**
     * @return Id[]
     */
    public function getAttendees(): array
    {
        return $this->attendees;
    }

    /**
     * @return Age
     */
    public function getAgeMin(): ?Age
    {
        return $this->ageMin;
    }

    /**
     * @return Age
     */
    public function getAgeMax(): ?Age
    {
        return $this->ageMax;
    }


    public function hasAgeMin(): bool
    {
        return !empty($this->ageMin);
    }

    public function hasAgeMax(): bool
    {
        return !empty($this->ageMax);
    }
}