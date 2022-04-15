<?php

include("Colours/Colour.php");
include("Colours/Red.php");
include("Colours/Yellow.php");
include("Shapes/Shape.php");
include("Shapes/Circle.php");
include("Shapes/Square.php");

$redCircle = new Circle(new Red());
$redSquare = new Square(new Red());
$yellowCircle = new Circle(new Yellow());
$yellowSquare = new Square(new Yellow());

print_r($redCircle);
print_r($redSquare);
print_r($yellowCircle);
print_r($yellowSquare);