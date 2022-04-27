<?php

class LampCommandFactory
{
    public function factory($type, Lamp $lamp)
    {
        switch ($type) {
            case "ON":
                return new TurnOnCommand($lamp);
            case "OFF":
                return new TurnOffCommand($lamp);
            case "SOS":
                return new SOSCommand($lamp);
            default:
                throw new RuntimeException('Cannot find the command ' . $type . PHP_EOL);
        }
    }
}