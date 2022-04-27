<?php

class ConcreteAggregate implements AggregateInterface
{
    public function createIterator()
    {
        $list = [
            'a',
            'b',
            'c',
            'd',
        ];
        return new ConcreteIterator($list);
    }
}