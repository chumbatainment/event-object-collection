<?php

namespace Unit\Events;

use Chumbatainment\EventObjectCollection\Events\Event\AbstractEvent;

class AbstractEventTest extends \PHPUnit\Framework\TestCase
{
    private AbstractEvent $sut;

    public function setUp(): void
    {
        $this->sut = new class extends AbstractEvent {
            public function setId(string $id): static
            {
                $this->id = $id;
                return $this;
            }
        };
    }

    public function testGetterSetter(): void
    {
        foreach($this->getGetterSetterValueCombinations() as [$setter, $getter, $value]){
            $this->sut->{$setter}($value);
            $this->assertSame($value, $this->sut->{$getter}());
        }
    }

    /**
     * @return array<int, array{0:string, 1:string, 2:mixed}>
     */
    private function getGetterSetterValueCombinations(): array
    {
        return [
            ['setId', 'getId', 'id'],
            ['setType', 'getType', 'type'],
            ['setDescription', 'getDescription', 'description with some longer text'],
            ['setAttendeeIds', 'getAttendeeIds', ['123','456']],
            ['setPrice', 'getPrice', 123],
            ['setStart', 'getStart', new \DateTime()],
            ['setEnd', 'getEnd', new \DateTime()],
            ['setCustomParameters', 'getCustomParameters', ['some'=>'parameters']],
        ];
    }
}
