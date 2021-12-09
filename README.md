# cyve/time

Time provider

## Installation
```bash
composer require cyve/time
```

## Usage
```php
$datetime = Time::datetime('2021-01-01', new DateTimeZone('UTC')); // return instance of DateTime
$now = Time::now();
$today = Time::today();
$today = Time::tomorrow();
$today = Time::yesterday();

Time::setTimestamp(946684800);
echo Time::now()->format('Y-m-d H:i:s'); // 2000-01-01 00:00:00
echo Time::now(new \DateTimeZone('Europe/Paris'))->format('Y-m-d H:i:s'); // 2000-01-01 01:00:00
```
