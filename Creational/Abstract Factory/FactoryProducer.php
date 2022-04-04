<?php

class FactoryProducer
{
    public static function getFactory($productType)
    {
        return new $productType();
    }
}