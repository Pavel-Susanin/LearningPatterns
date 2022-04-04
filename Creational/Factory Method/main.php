<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$animalLion = Animal::initial('Lion');
$animalCat = Animal::initial('Cat');

$animalLion->voice();
echo PHP_EOL;
$animalCat->voice();