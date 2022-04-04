<?php

class ObjectPool
{
    private $instances = array();

    public function get($key)
    {
        return $this->instances[$key];
    }

    public function add($object, $key)
    {
        $this->instances[$key] = $object;
    }
}

