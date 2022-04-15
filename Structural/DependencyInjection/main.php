<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
$connection = new DatabaseConnection($config);

echo $connection->getDns();