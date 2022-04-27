<?php

class SOSCommand implements CommandInterface
{
    protected $lamp;

    public function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    public function execute()
    {
        while(true)
        {
            $this->lamp->turnOn();
            sleep(1);
            $this->lamp->turnOff();
            sleep(1);
        }
    }
}