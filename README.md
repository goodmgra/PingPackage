# Airranged Ping Package

A Laravel Package to ping a URL. Used internally to ensure uptime and notify our team when services go down (typically by notifying our Slack Channel).

## Installation

Install via Composer

```
composer require airranged/ping-package
```

## Usage

### Basic Usage

Ping a URL and get the status code and response time back:

```php
use Airranged\PingPackage\Ping;

...

$ping = new Ping('http://httpbin.org/status/200');
echo "Response Code: " . $ping->getHttpStatus();
echo "<br>";
echo "Response was " . $ping->getTotalTime() . "ms";
```

### Advanced Usage

Ping a Password Protected URL and get the status code and response time back:

```php
use Airranged\PingPackage\Ping;

...

$ping = new Ping('http://httpbin.org/basic-auth/user/passwd');
$ping->useAuth('true');
$ping->setName('user');
$ping->setPass('passwd');
echo "Response Code: " . $ping->getHttpStatus();
echo "<br>";
echo "Response was " . $ping->getTotalTime() . "ms";
```

## To Do

- [ ] [Support Checking SSL Certificates](https://github.com/airranged/PingPackage/issues/2)
- [ ] [Add Tests](https://github.com/airranged/PingPackage/issues/1)

## License

Airranged Ping Package is open-sourced software licensed under the [MIT license](https://github.com/airranged/PingPackage/blob/master/LICENSE.md).
