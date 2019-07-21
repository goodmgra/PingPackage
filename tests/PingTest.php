<?php
namespace Airranged\PingPackage\Test;

use PHPUnit\Framework\TestCase;
use Airranged\PingPackage\Ping;

class PingTest extends TestCase
{
    /** @test */
    public function it_can_ping_a_url_200()
    {
        $ping = new Ping('http://httpbin.org/status/200');
        $response = $ping->getHttpStatus();
        $this->assertEquals(200, $response);
    }

    /** @test */
    public function it_can_ping_a_url_404()
    {
        $ping = new Ping('http://httpbin.org/status/404');
        $response = $ping->getHttpStatus();
        $this->assertEquals(404, $response);
    }

    /** @test */
    public function it_can_ping_a_url_500()
    {
        $ping = new Ping('http://httpbin.org/status/500');
        $response = $ping->getHttpStatus();
        $this->assertEquals(500, $response);
    }

    /** @test */
    public function it_can_ping_a_password_protected_url_without_auth()
    {
        $ping = new Ping('http://httpbin.org/basic-auth/user/passwd');
        $response = $ping->getHttpStatus();
        $this->assertEquals(401, $response);
    }

    /** @test */
    public function it_can_ping_a_password_protected_url_with_auth()
    {
        $ping = new Ping('http://httpbin.org/basic-auth/user/passwd');
        $ping->useAuth('true');
        $ping->setName('user');
        $ping->setPass('passwd');
        $response = $ping->getHttpStatus();
        $this->assertEquals(200, $response);
    }
}
