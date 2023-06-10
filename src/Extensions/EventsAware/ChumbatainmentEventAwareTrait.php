<?php

namespace Chumbatainment\EventObjectCollection\Extensions\EventsAware;

use Chumbatainment\EventObjectCollection\Events\Event;

trait ChumbatainmentEventAwareTrait
{
    /**
     * @var Event[]
     */
    private array $embeddedEvents;

    /**
     * @return Event[]
     */
    public function getEmbeddedEvents(): array
    {
        return $this->embeddedEvents;
    }

    public function addEmbeddedEvent(Event $event): static
    {
        $this->embeddedEvents[] = $event;
        return $this;
    }
}
