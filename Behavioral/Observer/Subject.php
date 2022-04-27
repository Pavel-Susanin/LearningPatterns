<?php

class Subject implements \SplSubject
{
    public $state;

    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        echo 'Subject: Attached an observer.' . PHP_EOL;
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
        echo 'Subject: Detached an observer.' . PHP_EOL;
    }

    public function notify(): void
    {
        echo 'Subject: Notifying observers...' . PHP_EOL;
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function someBusinessLogic(): void
    {
        echo PHP_EOL . "Subject: I'm doing something important. " . PHP_EOL;
        $this->state = rand(1,10);

        echo "Subject: My state has just changed to: " . $this->state . PHP_EOL;
        $this->notify();
    }
}