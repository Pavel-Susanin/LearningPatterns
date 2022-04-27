<?php

class ConcreteIterator implements MyInterface
{
    private $list;
    private $index;
    public function __construct($list)
    {
        $this->list = $list;
        $this->index = 0;
    }

    public function first()
    {
        $this->index = 0;
    }

    public function next()
    {
        $this->index++;
    }

    public function isDone()
    {
        return $this->index >= count($this->list);
    }

    public function currentItem()
    {
        return $this->list[$this->index];
    }
}