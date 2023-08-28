<?php

namespace Unit;

use Chumbatainment\EventObjectCollection\Events\Event\Transport;
use PHPUnit\Framework\TestCase;

class TransportTest extends TestCase
{
    public function testTransport()
    {
        $departureLocationId = 'departure';
        $destinationLocationId = 'destination';

        $transport = new Transport();
        $transport->setDepartureLocationId($departureLocationId);
        $transport->setDestinationLocationId($destinationLocationId);

        $this->assertSame($departureLocationId, $transport->getDepartureLocationId());
        $this->assertSame($destinationLocationId, $transport->getDestinationLocationId());
    }
}