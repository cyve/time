<?php

namespace Cyve\Time;

interface TimeInterface
{
    public static function datetime(string $datetime = 'now', \DateTimeZone $timezone = null): \DateTime;

    public static function now(\DateTimeZone $timezone = null): \DateTime;

    public static function today(): \DateTime;

    public static function tomorrow(): \DateTime;

    public static function yesterday(): \DateTime;

    public static function setTimestamp(int $timestamp): void;
}
