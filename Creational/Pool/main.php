<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$pool = new ObjectPool();
$reusableObject = new ReusableObject();
$pool->add($reusableObject, 'reusable_object_key');

$reusableObject = $pool->get('reusable_object_key');
$reusableObject->doSomething();