<?php

namespace Cyve\Time\Test;

use Cyve\Time\Time;
use PHPUnit\Framework\TestCase;

class TimeTest extends TestCase
{
    public function testCurrent()
    {
        $time = new Time();

        $this->assertEquals(time(), $time->now()->getTimestamp());
        $this->assertEquals(date('Y-m-d H:i:s'), $time->now()->format('Y-m-d H:i:s'));
        $this->assertEquals(date('Y-m-d').' 00:00:00', $time->today()->format('Y-m-d H:i:s'));
    }

    public function testRelative()
    {
        $time = new Time('2000-01-01 12:00:00');

        $this->assertEquals(946724400, $time->now()->getTimestamp());
        $this->assertEquals('2000-01-01 12:00:00', $time->now()->format('Y-m-d H:i:s'));
        $this->assertEquals('2000-01-01 00:00:00', $time->today()->format('Y-m-d H:i:s'));
    }

    public function testRelativeWithTimeZone()
    {
        $time = new Time('2000-01-01 12:00:00', new \DateTimeZone('UTC'));

        $this->assertEquals(946728000, $time->now()->getTimestamp());
        $this->assertEquals('2000-01-01 12:00:00', $time->now()->format('Y-m-d H:i:s'));
        $this->assertEquals('2000-01-01 00:00:00', $time->today()->format('Y-m-d H:i:s'));
    }
}
