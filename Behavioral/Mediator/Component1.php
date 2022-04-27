<?php

class Component1 extends BaseComponent
{
    public function doA(): void
    {
        echo 'Component 1 does A.' . PHP_EOL;
        $this->mediator->notify($this, 'A');
    }

    public function doB(): void
    {
        echo 'Component 1 does B.' . PHP_EOL;
        $this->mediator->notify($this, 'B');
    }
}