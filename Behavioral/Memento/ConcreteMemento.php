<?php

class ConcreteMemento implements Memento
{
    private string $state;

    private string $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getName(): string
    {
        return $this->date . ' / (' . substr($this->state, 0, 9) . "...)" . PHP_EOL;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}