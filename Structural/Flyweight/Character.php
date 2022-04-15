<?php

abstract class Character
{
    protected $symbol;
    protected $width;
    protected $height;
    protected $ascent;
    protected $descent;
    protected $pointSize;

    public abstract function Display($pointSize);
}