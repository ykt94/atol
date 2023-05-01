<?php
namespace tests;

use App\MemcachedClient;
use PHPUnit\Framework\TestCase;

/**
 * Class MemcachedClientTest
 * @package tests
 *
 * @author Alexander Tolstoukhov
 */
class MemcachedClientTest extends TestCase
{
    /**
     * @return void
     */
    public function testSet(): void
    {
        $client = new MemcachedClient();
        $mc = new \Memcached();
        $mc->addServer('localhost', 11211);
        $result = $client->set($mc, 'key', 'value');
        $this->assertEquals(1, $result);
    }

    /**
     * @return void
     */
    public function testGet(): void
    {
        $client = new MemcachedClient();
        $mc = new \Memcached();
        $mc->addServer('localhost', 11211);
        $client->set($mc, 'key', 'value');
        $result = $client->get($mc, 'key');
        $this->assertEquals('value', $result);
    }

    /**
     * @return void
     */
    public function testDelete(): void
    {
        $client = new MemcachedClient();
        $mc = new \Memcached();
        $mc->addServer('localhost', 11211);
        $client->set($mc, 'key', 'value');
        $result = $client->delete($mc, 'key');
        $this->assertEquals(1, $result);
    }
}
