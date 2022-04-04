<?php

abstract class Animal
{
    public static function initial($animal)
    {
        return new $animal;
    }
    abstract public function voice();
}