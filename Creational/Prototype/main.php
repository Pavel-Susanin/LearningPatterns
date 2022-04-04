<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$prototypeFactory = new TerrainFactory(new Sea(), new Plains(), new Forest());

$sea = $prototypeFactory -> getSea();
$plains = $prototypeFactory -> getPlains();
$forest = $prototypeFactory -> getForest();

print_r($sea);
print_r($plains);
print_r($forest);