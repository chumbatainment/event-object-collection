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
    protected ?array $attendees = null;
    protected ?int $price = null;
    protected ?\DateTime $start = null;
    protected ?\DateTime $end = null;
    /** @var array<string|int, mixed>|null  */
    protected ?array $customParameter = null;

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

    public function getAttendees(): ?array
    {
        return $this->attendees;
    }

    /**
     * @param string[] $attendees
     */
    public function setAttendees(array $attendees): static
    {
        $this->attendees = $attendees;
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
    public function getCustomParameter(): ?array
    {
        return $this->customParameter;
    }

    /**
     * @param array<string|int, mixed>|null $customParameter
     */
    public function setCustomParameter(?array $customParameter): static
    {
        $this->customParameter = $customParameter;
        return $this;
    }

}