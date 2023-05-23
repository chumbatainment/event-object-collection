<?php

namespace Chumbatainment\EventObjectCollection\ValueObjects;

use Chumbatainment\EventObjectCollection\ValueObject;

readonly class Number implements ValueObject
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