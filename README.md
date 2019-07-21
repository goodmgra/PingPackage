# ping-laravel

A Laravel Package to ping a URL.

```php
use Airranged\PingPackage\Ping;

...

$ping = new Ping('httpstat.us/200?sleep=5000');
echo "Response Code: " . $ping->getHttpStatus();
echo "<br>";
echo "Response was " . $ping->getTotalTime() . "ms";
```
