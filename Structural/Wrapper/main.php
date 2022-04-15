<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$book = new Book('Pushkin', 'Dyb');
$bookAdapter = new BookAdapter($book);

echo ($bookAdapter->getAuthorAndTitle());