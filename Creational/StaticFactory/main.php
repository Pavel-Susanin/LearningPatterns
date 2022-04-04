<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$factory = StaticFactory::factory('number');

print_r($factory->format(12345678900000));