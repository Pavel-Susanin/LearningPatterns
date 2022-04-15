<?php

class CharacterA extends Character
{
    // Constructor
    public function __construct()
    {
        $this->symbol = 'A';
        $this->height = 100;
        $this->width = 120;
        $this->ascent = 70;
        $this->descent = 0;
    }

    public function Display($pointSize)
    {
        $this->pointSize = $pointSize;
        print ($this->symbol . ' (pointsize ' . $this->pointSize . ")" . PHP_EOL);
    }
}