<?php

class FormatNumber implements Formatter
{
    public function format($input)
    {
        return number_format((int)$input);
    }
}