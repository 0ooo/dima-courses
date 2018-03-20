<?php

namespace Pavel\Tasks\Task2;

use ArrayAccess;

/**
 * Class Container
 * @package Pavel\Tasks\Task2
 */
class Container implements ArrayAccess
{
    /**
     * @var array
     */
    private $bindings = [];

    /**
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return $this->has($offset);
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        $this->unset($offset);
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function get(string $key)
    {
        if (! $this->has($key)) {
            return null;
        }

        $value = $this->bindings[$key];

        if (is_callable($value)) {
            $value = $this->bindings[$key] = call_user_func($value);
        }

        return $value;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, $this->bindings);
    }

    /**
     * @param string $key
     * @param $value
     */
    public function set(string $key, $value): void
    {
        $this->bindings[$key] = $value;
    }

    /**
     * @param string $key
     */
    public function unset(string $key)
    {
        unset($this->bindings[$key]);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function __invoke($key)
    {
        return $this->get($key);
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function __get($key)
    {
        return $this->get($key);
    }

    /**
     * @param $key
     * @param $value
     */
    public function __set($key, $value)
    {
        $this->set($key, $value);
    }
}