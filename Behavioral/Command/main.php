<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$lamp = new Lamp();
$factory = new LampCommandFactory();

echo 'Insert the command: ';
$factory->factory(readline(), $lamp)->execute();