<?php

namespace Bczopp\EventObjectCollection\BaseObjects;

use Bczopp\EventObjectCollection\MinimalEvent;
use Bczopp\EventObjectCollection\ValueObjects\EventId;
use Bczopp\EventObjectCollection\ValueObjects\Id;

class AbstractMinimalEvent implements MinimalEvent
{
    protected Id $id;
    protected EventId $eventId;

    public function getId(): Id
    {
        return $this->id;
    }

    public function getEventId(): EventId
    {
        return $this->eventId;
    }
}