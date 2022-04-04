<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$phoneFactory = FactoryProducer::getFactory('PhoneFactory');
$IPhone = $phoneFactory->getPhone('IPhone');
$IPhone->call();

$tvFactory = FactoryProducer::getFactory('TVFactory');
$tv = $tvFactory->getTV('SmartTV');
echo $tv->getBrand();