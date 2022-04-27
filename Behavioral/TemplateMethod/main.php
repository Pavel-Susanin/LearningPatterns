<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


/**
 * Клиентский код вызывает шаблонный метод для выполнения алгоритма. Клиентский
 * код не должен знать конкретный класс объекта, с которым работает, при
 * условии, что он работает с объектами через интерфейс их базового класса.
 */
function clientCode(AbstractClass $class)
{
    // ...
    $class->templateMethod();
    // ...
}

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClass1());
echo "\n";

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClass2());