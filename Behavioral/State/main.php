<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();