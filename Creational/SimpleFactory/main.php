<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$factory = new BicycleFactory();
$bicycle = $factory->createBicycle();
$bicycle->driveTo('Moscow');