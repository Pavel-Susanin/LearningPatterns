<?php

class Component2 extends BaseComponent
{
    public function doC(): void
    {
        echo 'Component 2 does C.' . PHP_EOL;
        $this->mediator->notify($this, 'C');
    }

    public function doD(): void
    {
        echo 'Component 2 does D. ' . PHP_EOL;
        $this->mediator->notify($this, 'D');
    }
}