<?php

namespace Cyve\Time\Test;

use Cyve\Time\Time;
use PHPUnit\Framework\TestCase;

class TimeTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(time(), Time::now()->getTimestamp());
        $this->assertEquals(date('Y-m-d H:i:s'), Time::now()->format('Y-m-d H:i:s'));
        $this->assertEquals(date('Y-m-d').' 00:00:00', Time::today()->format('Y-m-d H:i:s'));
        $this->assertEquals(date('Y-m-d H:i:s', time() + 86400), Time::datetime('+1 day')->format('Y-m-d H:i:s'));
        $this->assertEquals('2012-10-01 12:00:00', Time::datetime('2012-10-01 12:00:00')->format('Y-m-d H:i:s'));
    }

    public function testRelative()
    {
        Time::setTimestamp(946728000); // 2000-01-01 12:00:00 UTC

        $this->assertEquals(946728000, Time::now()->getTimestamp());
        $this->assertEquals('2000-01-01 12:00:00', Time::now()->format('Y-m-d H:i:s'));
        $this->assertEquals('2000-01-01 13:00:00', Time::now(new \DateTimeZone('Europe/Paris'))->format('Y-m-d H:i:s'));
        $this->assertEquals('2000-01-01 00:00:00', Time::today()->format('Y-m-d H:i:s'));
        $this->assertEquals('2000-01-02 12:00:00', Time::datetime('+1 day')->format('Y-m-d H:i:s'));
        $this->assertEquals('2012-10-01 12:00:00', Time::datetime('2012-10-01 12:00:00')->format('Y-m-d H:i:s'));
    }
}
