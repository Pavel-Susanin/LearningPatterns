<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$car = new Car;
$bike = new Bike;


echo 'The car is driving at the moment' . PHP_EOL;
echo $car->drive() . PHP_EOL;
echo $car->reverse() . PHP_EOL;

echo 'The bike is driving at the moment' . PHP_EOL;
echo $bike->drive() . PHP_EOL;
echo $bike->reverse() . PHP_EOL;