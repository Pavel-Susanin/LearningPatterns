<?php

class Math implements IMath
{
    public function __construct()
    {
        print ("Create object Math. Wait ... ") . PHP_EOL;
        sleep(5);
    }

    public function Add($x, $y)
    {
        return $x + $y;
    }

    public function Sub($x, $y)
    {
        return $x - $y;
    }

    public function Mul($x, $y)
    {
        return $x * $y;
    }

    public function Div($x, $y)
    {
        return $x / $y;
    }
}