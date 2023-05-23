<?php

namespace Bczopp\EventObjectCollection\ValueObjects;

class Age implements ValueObject
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