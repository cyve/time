<?php

namespace Cyve\Time\Test;

use Cyve\Time\Time;
use PHPUnit\Framework\TestCase;

class TimeTest extends TestCase
{
    public function testNow()
    {
        $t = (new Time())->now();
        
        $this->assertEquals(time(), $t->getTimestamp());
    }

    public function testToday()
    {
        $t = (new Time())->today();
        
        $this->assertEquals((new \DateTime())->format('Y-m-d'), $t->format('Y-m-d'));
        $this->assertEquals('00:00:00', $t->format('H:i:s'));
    }
}
