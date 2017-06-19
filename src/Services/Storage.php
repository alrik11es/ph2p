<?php
namespace Ph2p\Services;

use Gregwar\Cache\Cache;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class Storage implements ServiceProviderInterface
{
    public $cache;

    public function __construct()
    {
        $this->cache = new Cache();
        $this->cache->setCacheDirectory('cache');
    }

    public function put($name, $data)
    {
        $this->cache->set($name, $data);
    }

    public function get($name)
    {
        return $this->cache->get($name);
    }

    public function register(Container $pimple)
    {
        return new self();
    }
}