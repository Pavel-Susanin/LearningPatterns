<?php

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }
    function getSea()
    {
        return clone $this->sea;
    }
    function getPlains()
    {
        return clone $this->plains;
    }
    function getForest()
    {
        return clone $this->forest;
    }
}