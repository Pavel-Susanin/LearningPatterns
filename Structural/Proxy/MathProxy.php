<?php

class MathProxy implements IMath
{
    protected $math;

    public function __construct()
    {
        $this->math = null;
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
        if ($this->math == null)
        {
            $this->math = new Math();
        }
        return $this->math->Mul($x, $y);
    }

    public function Div($x, $y)
    {
        if ($this->math == null)
        {
            $this->math = new Math();
        }
        return $this->math->Div($x, $y);
    }
}