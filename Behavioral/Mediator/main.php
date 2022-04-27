<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$c1 = new Component1();
$c2 = new Component2();
$mediator = new ConcreteMediator($c1, $c2);

echo 'Client triggers operation A.' . PHP_EOL;
$c1->doA();

echo PHP_EOL;

echo 'Client triggers operation D.' . PHP_EOL;
$c2->doD();