<?php

class CharacterZ extends Character
{
    // Constructor
    public function __construct()
    {
        $this->symbol = 'Z';
        $this->height = 100;
        $this->width = 100;
        $this->ascent = 68;
        $this->descent = 0;
    }

    public function  Display($pointSize)
    {
        $this->pointSize = $pointSize;
        print($this->symbol." (pointsize ".$this->pointSize.")" . PHP_EOL);
    }
}