<?php

namespace Cyve\Time;

interface TimeInterface
{
    /**
     * @return \DateTime
     */
    public function now();

    /**
     * @return \DateTime
     */
    public function today();
}
