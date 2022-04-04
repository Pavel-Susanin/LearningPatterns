<?php

abstract class ProductFactory
{
    abstract function getTV($tvType);
    abstract function getPhone($PhoneType);
}