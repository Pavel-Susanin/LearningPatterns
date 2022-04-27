<?php

class Caretaker
{
    private $mementos = [];

    private $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup(): void
    {
        echo PHP_EOL . "Caretaker: Saving Originator's state... " . PHP_EOL;
        $this->mementos[] = $this->originator->save();
    }

    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);

        echo 'Caretaker: Restoring state to: ' . $memento->getName() . PHP_EOL;
        try {
            $this->originator->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }
    }

    public function showHistory(): void
    {
        echo "Caretaker: Here's the list of mementos: " . PHP_EOL;
        foreach ($this->mementos as $memento) {
            echo $memento->getName() . PHP_EOL;
        }
    }
}