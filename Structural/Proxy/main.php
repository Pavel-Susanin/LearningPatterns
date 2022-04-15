<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$p = new MathProxy();
print('4 + 2 = ' . $p->add(4,2)) . PHP_EOL;
print('4 - 2 = ' . $p->Sub(4,2)) . PHP_EOL;
print('4 * 2 = ' . $p->Mul(4,2)) . PHP_EOL;
print('4 / 2 = ' . $p->Div(4,2)) . PHP_EOL;