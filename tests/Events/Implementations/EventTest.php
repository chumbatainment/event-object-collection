<?php

namespace Chumbatainment\Test\Events\Implementations;

use Chumbatainment\EventObjectCollection\Events\Implementations\WithSetter\AbstractEvent;
use Chumbatainment\EventObjectCollection\ValueObjects\AttendeeId;
use Chumbatainment\EventObjectCollection\ValueObjects\EventDescription;
use Chumbatainment\EventObjectCollection\ValueObjects\EventId;
use Chumbatainment\EventObjectCollection\ValueObjects\EventName;
use Chumbatainment\EventObjectCollection\ValueObjects\EventPriceTotal;
use Chumbatainment\EventObjectCollection\ValueObjects\EventType;
use Chumbatainment\EventObjectCollection\ValueObjects\Id;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
    public function testSetterGetter(): void
    {
        $event = new class() extends AbstractEvent{};
        foreach($this->getData() as [$attribute, $value]){
            $setter = sprintf('set%s', ucfirst($attribute));
            $getter = sprintf('get%s', ucfirst($attribute));
            $event->{$setter}($value);
            $this->assertEquals($value, $event->{$getter}());
        }
    }

    private function getData(): iterable
    {
        foreach([
            ['id', new Id(123)],
            ['eventId', new EventId('abc123')],
            ['type', new EventType('type')],
            ['name', new EventName('name')],
            ['description', new EventDescription('description')],
            ['attendees', [new AttendeeId('att123')]],
            ['price', new EventPriceTotal(123)],
            ['startDateTime', new \DateTime()],
            ['endDateTime', new \DateTime()],
                ] as $combination){
            yield $combination;
        }
    }
}
