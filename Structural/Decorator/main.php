<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$message = new Message();

$superMessage = new SuperMessage($message);

$ultraMessage = new UltraMessage($superMessage);

echo $superMessage->Operation() . PHP_EOL;
echo $ultraMessage->Operation();