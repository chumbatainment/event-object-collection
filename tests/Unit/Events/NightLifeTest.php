<?php

namespace Unit;

use Chumbatainment\EventObjectCollection\Events\Event\NightLife;
use PHPUnit\Framework\TestCase;

class NightLifeTest extends TestCase
{
    public function testNightLife()
    {
        $locationId = 'location';
        $minAge = 18;

        $nightLife = new NightLife();
        $nightLife->setLocationId($locationId);
        $nightLife->setMinAge($minAge);

        $this->assertSame($locationId, $nightLife->getLocationId());
        $this->assertSame($minAge, $nightLife->getMinAge());
    }

}