<?php

namespace Bczopp\EventObjectCollection\ValueObjects;

class AttendeeId implements ValueObject
{
    public function __construct(
        private string $value
    )
    {
    }

    public function getValue(): string
    {
        return $this->value;
    }
}