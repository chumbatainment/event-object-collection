<?php

namespace Unit;

use Chumbatainment\EventObjectCollection\Events\Event\PartyHosting;
use PHPUnit\Framework\TestCase;

class PartyHostingTest extends TestCase
{
    public function testPartyHosting()
    {
        $locationId = 'location';
        $minAge = 18;
        $maxVisitorCapacity = 100;

        $partyHosting = new PartyHosting();
        $partyHosting->setLocationId($locationId);
        $partyHosting->setMinAge($minAge);
        $partyHosting->setMaxVisitorCapacity($maxVisitorCapacity);

        $this->assertSame($locationId, $partyHosting->getLocationId());
        $this->assertSame($minAge, $partyHosting->getMinAge());
        $this->assertSame($maxVisitorCapacity, $partyHosting->getMaxVisitorCapacity());
    }
}
