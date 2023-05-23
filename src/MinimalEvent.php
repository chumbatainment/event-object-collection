<?php

namespace Bczopp\EventObjectCollection;

use Bczopp\EventObjectCollection\ValueObjects\EventId;
use Bczopp\EventObjectCollection\ValueObjects\Id;

interface MinimalEvent
{
    public function getId(): Id;

    public function getEventId(): EventId;
}