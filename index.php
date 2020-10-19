<?php
include_once('Circle.php');
include_once('Cylinder.php');


$circle = new Circle(3, 'blue');

echo $circle->toString() . '<br>' . 'Square :' . $circle->square() . "<br>";

$cylinder = new Cylinder(2, 'blue', 5);

echo  'Color cylinder:' . $cylinder->color.'<br>'.$cylinder->toString() . "<br>" . 'Volume :' . $cylinder->square() . '<br>' ;