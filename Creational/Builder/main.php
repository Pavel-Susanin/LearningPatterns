<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$newUser = new UserBuilder();
$newUser->addName('Paul');
$newUser->addSurname('Antar');
$newUser->addPayment(15000);

print_r($newUser);