<?php

class ConcreteMediator implements Mediator
{
    private $component1;

    private $component2;

    public function __construct(Component1 $component1, Component2 $component2)
    {
        $this->component1 = $component1;
        $this->component1->setMediator($this);
        $this->component2 = $component2;
        $this->component2->setMediator($this);
    }

    public function notify(object $sender, string $event): void
    {
        switch ($event) {
            case 'A':
                echo 'Mediator reacts on A and triggers following operations: ' . PHP_EOL;
                $this->component2->doC();
            case 'D':
                echo 'Mediator reacts on D and triggers following operations: ' . PHP_EOL;
        }
    }
}