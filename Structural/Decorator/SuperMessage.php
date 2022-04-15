<?php

class SuperMessage extends Decorator
{
    public function Operation()
    {
        return ' +++ ' . parent::Operation() . ' +++ ';
    }
}