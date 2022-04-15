<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$query =
    (
    new Sql()
    )
        ->select(['foo', 'bar'])
        ->from('foobar', 'f')
        ->where('f.bar = ?');
