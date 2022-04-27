<?php

class ConcreteStateA extends State
{
    public function handle1(): void
    {
        echo 'ConcreteStateA handles request1.' . PHP_EOL;
        echo 'ConcreteStateA wants to change the state of the context.' . PHP_EOL;
        $this->context->transitionTo(new ConcreteStateB);
    }

    public function handle2(): void
    {
        echo 'ConcreteStateA handles request2.' . PHP_EOL;
    }
}