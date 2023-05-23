<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\ValueObjects;

use Chumbatainment\EventObjectCollection\ValueObject;

readonly class Text implements ValueObject
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