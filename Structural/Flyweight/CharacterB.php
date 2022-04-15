<?php

class CharacterB extends Character
{
// Constructor
    public function __construct()
    {
        $this->symbol = 'B';
        $this->height = 100;
        $this->width = 140;
        $this->ascent = 72;
        $this->descent = 0;
    }

    public function Display($pointSize)
    {
        $this->pointSize = $pointSize;
        print($this->symbol . " (pointsize " . $this->pointSize . ")" . PHP_EOL);
    }

}