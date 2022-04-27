<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$agreegate = new ConcreteAggregate();
$iterator = $agreegate->createIterator();

while (!$iterator->isDone())
{
    echo $iterator->currentItem(), PHP_EOL;
    $iterator->next() . PHP_EOL;
}