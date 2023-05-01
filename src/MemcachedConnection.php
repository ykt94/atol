<?php

namespace App;

use Memcached;

/**
 * Class MemcachedConnection
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class MemcachedConnection
{
    private static Memcached $mc;

    private final function __construct()
    {
    }

    public static function getConnection(): Memcached
    {
        if(!isset(self::$mc)) {
            self::$mc = new Memcached();
            self::$mc->addServer('localhost', 11211);
        }
        return self::$mc;
    }
}
