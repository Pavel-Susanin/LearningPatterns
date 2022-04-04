<?php

final class StaticFactory
{
    public static function factory($type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        } elseif ($type == 'string') {
            return new FormatString();
        }
    }
}