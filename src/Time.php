<?php

namespace Cyve\Time;

class Time implements TimeInterface
{
    private static ?int $timestamp = null;

    public static function datetime(string $datetime = 'now', \DateTimeZone $timezone = null): \DateTime
    {
        return static::now($timezone)->modify($datetime);
    }

    public static function now(\DateTimeZone $timezone = null): \DateTime
    {
        $time = static::$timestamp ?: time();
        $timezone = $timezone ?: new \DateTimeZone(date_default_timezone_get());

        return \DateTime::createFromFormat('U', $time)->setTimezone($timezone);
    }

    public static function today(): \DateTime
    {
        return static::now()->modify('today');
    }

    public static function tomorrow(): \DateTime
    {
        return static::now()->modify('tomorrow');
    }

    public static function yesterday(): \DateTime
    {
        return static::now()->modify('yesterday');
    }

    public static function setTimestamp(int $timestamp): void
    {
        static::$timestamp = $timestamp;
    }
}
