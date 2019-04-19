<?php

namespace Cyve\Time;

class Time implements TimeInterface
{
    /**
     * @var string
     */
    private $time;

    /**
     * @var \DateTimeZone
     */
    private $timezone;

    /**
     * @param string $time
     */
    public function __construct(string $time = 'now', \DateTimeZone $timezone = null)
    {
        $this->time = $time;
        $this->timezone = $timezone;
    }

    /**
     * @return \DateTime
     */
    public function now()
    {
        return new \DateTime($this->time, $this->timezone);
    }

    /**
     * @return \DateTime
     */
    public function today()
    {
        return (new \DateTime($this->time, $this->timezone))->setTime(0, 0, 0);
    }
}
