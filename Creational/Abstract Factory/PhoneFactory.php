<?php

class PhoneFactory extends ProductFactory
{
    function getPhone($phoneType)
    {
        if($phoneType == null)
        {
            return null;
        }
        return new ($phoneType);
    }
    function getTV($tvType)
    {
        return null;
    }
}