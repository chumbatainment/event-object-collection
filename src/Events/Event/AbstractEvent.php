<?php

namespace Chumbatainment\EventObjectCollection\Events\Event;

use Chumbatainment\EventObjectCollection\Events\Event;

abstract class AbstractEvent implements Event
{
    protected ?string $id = null;
    protected ?string $type = null;
    protected ?string $name = null;
    protected ?string $description = null;
    /** @var string[]|null  */
    protected ?array $attendeeIds = null;
    protected ?int $price = null;
    protected ?\DateTime $start = null;
    protected ?\DateTime $end = null;
    /** @var array<string|int, mixed>|null  */
    protected ?array $customParameters = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getAttendeeIds(): ?array
    {
        return $this->attendeeIds;
    }

    /**
     * @param string[] $attendeeIds
     */
    public function setAttendeeIds(array $attendeeIds): static
    {
        $this->attendeeIds = $attendeeIds;
        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getStart(): ?\DateTime
    {
        return $this->start;
    }

    public function setStart(\DateTime $start): static
    {
        $this->start = $start;
        return $this;
    }

    public function getEnd(): ?\DateTime
    {
        return $this->end;
    }

    public function setEnd(\DateTime $end): static
    {
        $this->end = $end;
        return $this;
    }

    /**
     * @return array<string|int, mixed>|null
     */
    public function getCustomParameters(): ?array
    {
        return $this->customParameters;
    }

    /**
     * @param array<string|int, mixed>|null $customParameters
     */
    public function setCustomParameters(?array $customParameters): static
    {
        $this->customParameters = $customParameters;
        return $this;
    }

}