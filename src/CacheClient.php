<?php

namespace App;

use Memcached;

interface CacheClient
{
    public function get(Memcached $mc, string $key);

    public function set(Memcached $mc, string $key, $value);

    public function delete(Memcached $mc, string $key);
}
