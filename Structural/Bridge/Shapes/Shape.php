<?php

abstract class Shape
{
    private string $shape;
    private string $colour;

    public function __construct($colour)
    {
        $this->colour = $colour->colour;
    }

    public function draw()
    {
        echo $this->colour . ' ' . $this->shape;
    }
}