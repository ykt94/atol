<?php

namespace App;

use Exception;
use Memcached;

/**
 * Class MemcachedClient
 * @package App
 *
 * @author Alexander Tolstoukhov
 */
class MemcachedClient implements CacheClient
{
    public function get(Memcached $mc, string $key)
    {
        try {
            return $mc->get($key);
        } catch(Exception $exception) {
            return $e;
        }
    }

    public function set(Memcached $mc, string $key, $value)
    {
        try {
            return $mc->set($key, $value);
        } catch(Exception $exception) {
            return $e;
        }
    }

    public function delete(Memcached $mc, string $key)
    {
        try {
            return $mc->delete($key);
        } catch(Exception $exception) {
            return $e;
        }
    }
}
