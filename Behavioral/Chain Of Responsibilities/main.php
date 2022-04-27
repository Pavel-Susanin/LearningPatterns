<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

function clientCode(Handler $handler)
{
    foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
        echo "Client: Who wants a " . $food . "?" . PHP_EOL;
        $result = $handler->handle($food);
        if ($result) {
            echo " " . $result;
        } else {
            echo " " . $food . " was left untouched." . PHP_EOL;
        }
    }
}

$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($squirrel)->setNext($dog);

echo "Chain: Monkey > Squirrel > Dog " . PHP_EOL . PHP_EOL;
clientCode($monkey);
echo PHP_EOL;

echo "Chain: Squirrel > Dog" . PHP_EOL . PHP_EOL;
clientCode($squirrel);