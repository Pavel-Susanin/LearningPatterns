<?php

class Car extends Transport
{
    public function drive()
    {
        return 'Driving forward ...';
    }

    public function reverse()
    {
        return 'Driving reverse ...';
    }
}