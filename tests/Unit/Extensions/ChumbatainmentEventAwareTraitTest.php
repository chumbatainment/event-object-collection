<?php

namespace Unit\Extensions;

use Chumbatainment\EventObjectCollection\Events\Event;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareInterface;
use Chumbatainment\EventObjectCollection\Extensions\EventsAware\ChumbatainmentEventAwareTrait;
use PHPUnit\Framework\TestCase;

class ChumbatainmentEventAwareTraitTest extends TestCase
{
    private ChumbatainmentEventAwareInterface $sut;

    protected function setUp(): void
    {
        $this->sut = new class() implements ChumbatainmentEventAwareInterface {
            use ChumbatainmentEventAwareTrait;
        };
    }

    public function test(): void
    {
        $event = $this->createMock(Event::class);
        $this->sut->addEmbeddedEvent($event);
        $this->assertSame([$event], $this->sut->getEmbeddedEvents());
    }
}