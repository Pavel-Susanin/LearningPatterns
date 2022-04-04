<?php

class TVFactory extends ProductFactory
{
    function getTV($tvType)
    {
        if($tvType == null)
        {
            return null;
        }
        return new $tvType;
    }
    function getPhone($PhoneType)
    {
        return null;
    }
}