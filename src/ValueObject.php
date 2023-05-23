<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection;

interface ValueObject
{
    public function getValue(): mixed;
}