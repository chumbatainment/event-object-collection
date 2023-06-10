<?php

declare(strict_types=1);

namespace Chumbatainment\EventObjectCollection\Events;

interface Event
{
    public function getId(): ?string;

    public function getType(): ?string;

    public function getName(): ?string;

    public function getDescription(): ?string;

    /**
     * @return string[]
     */
    public function getAttendees(): ?array;

    public function getPrice(): ?int;
    public function getStart(): ?\DateTime;
    public function getEnd(): ?\DateTime;
    public function getCustomParameter(): ?array;

}