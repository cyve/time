# cyve/time

Time provider

## Installation
```bash
composer require cyve/time
```

## Usage
```php
function foo(\Cyve\Time $time) {
    $now = $time->now(); // current time
    $today = $time->today(); // current day
}
```
