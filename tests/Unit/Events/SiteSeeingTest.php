<?php

namespace Unit;

use Chumbatainment\EventObjectCollection\Events\Event\SiteSeeing;
use PHPUnit\Framework\TestCase;

class SiteSeeingTest extends TestCase
{
    public function testSiteSeeing()
    {
        $locationId = 'location';
        $minAge = 18;
        $transportId = 'transport';
        $returnTransportId = 'returnTransport';

        $siteSeeing = new SiteSeeing();
        $siteSeeing->setLocationId($locationId);
        $siteSeeing->setMinAge($minAge);
        $siteSeeing->setTransportId($transportId);
        $siteSeeing->setReturnTransportId($returnTransportId);

        $this->assertSame($locationId, $siteSeeing->getLocationId());
        $this->assertSame($minAge, $siteSeeing->getMinAge());
        $this->assertSame($transportId, $siteSeeing->getTransportId());
        $this->assertSame($returnTransportId, $siteSeeing->getReturnTransportId());
    }
}