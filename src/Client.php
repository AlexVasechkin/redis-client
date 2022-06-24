<?php

namespace Avn\RedisClient;

use Predis;
use Avn\Contracts\Redis\RedisInterface;

class Client
    implements RedisInterface
{
    private $redis;

    public function __construct(string $dsn)
    {
        $this->redis = new Predis\Client($dsn);
    }

    public function hget($key, $field): ?string
    {
        return $this->redis->hget($key, $field);
    }

    public function hset($key, $field, $value)
    {
        return $this->redis->hset($key, $field, $value);
    }

    public function keys($pattern): array
    {
        return $this->redis->keys($pattern);
    }

    public function hdel($keys): int
    {
        return $this->redis->del($keys);
    }

    public function get($key): ?string
    {
        return $this->redis->get($key);
    }

    public function set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null)
    {
        return $this->redis->set($key, $value, $expireResolution, $expireTTL, $flag);
    }

    public function del($keys)
    {
        return $this->redis->del($keys);
    }

    public function rpush($key, array $values)
    {
        return $this->redis->rpush($key, $values);
    }

    public function llen($key): int
    {
        return $this->redis->llen($key);
    }

    public function lrange($key, $start, $stop): array
    {
        return $this->redis->lrange($key, $start, $stop);
    }
}
