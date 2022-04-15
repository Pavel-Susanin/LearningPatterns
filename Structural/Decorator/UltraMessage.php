<?php

class UltraMessage extends Decorator
{
    public function Operation()
    {
        return ' --- ' . parent::Operation() . ' --- ' . PHP_EOL;
    }
}