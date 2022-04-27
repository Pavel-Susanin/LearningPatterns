<?php

class ConcreteStateB extends B
{
    public function handle1(): void
    {
        echo 'ConcreteStateB handles request1.' . PHP_EOL;
    }

    public function handle2(): void
    {
        echo "ConcreteStateB handles request2.\n";
        echo "ConcreteStateB wants to change the state of the context.\n";
        $this->context->transitionTo(new ConcreteStateA());
    }
}