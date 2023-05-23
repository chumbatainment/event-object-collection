<?php

namespace Bczopp\EventObjectCollection\ValueObjects;

class Id implements ValueObject
{
    public function __construct(
        private int $value
    )
    {
    }

    public function getValue(): int
    {
        return $this->value;
    }
}