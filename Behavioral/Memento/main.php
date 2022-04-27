<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$originator = new Originator("Super-duper-super-puper-super");
$caretaker = new Caretaker($originator);
sleep(1);
$caretaker->backup();
$originator->doSomething();
sleep(1);
$caretaker->backup();
$originator->doSomething();
sleep(1);
$caretaker->backup();
$originator->doSomething();
sleep(1);
echo PHP_EOL;
$caretaker->showHistory();
sleep(1);
echo PHP_EOL . "Client: Now, let's rollback!" . PHP_EOL . PHP_EOL;
$caretaker->undo();
sleep(1);
echo "Client: Once more!" . PHP_EOL . PHP_EOL;
$caretaker->undo();