<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$document = 'AAZZBBZB';

$chars = str_split($document);
print_r($chars);

$factory = new CharacterFactory();
$pointSize = 0;

foreach($chars as $key)
{
    $pointSize++;
    $character = $factory->getCharacterByKey($key);
    $character->Display($pointSize);
}