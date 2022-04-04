<?php

class IPhone implements Phone
{
    function call()
    {
        echo ('IPhone::call ...' . PHP_EOL);
    }
}