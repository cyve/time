<?php

namespace Cyve\Time;

class Time implements TimeInterface
{
    /**
     * @return \DateTime
     */
    public function now()
    {
        return new \DateTime();
    }

    /**
     * @return \DateTime
     */
    public function today()
    {
        return new \DateTime('today');
    }
}
