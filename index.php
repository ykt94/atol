<?php
$mc = new \Memcached();
$mc->addServer('localhost', 11211);
echo $mc->set('ff','hjhj');
echo $mc->delete('ff');
