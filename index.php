<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$bike = new Bicycle("blue", 14, 1, 2);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo "<br>";
echo "<br>";
echo "<br>";

$car = new Car("red", 5, "Dechets");


echo $car->forward();
echo $car->start();
echo $car->forward(79);
echo $car->brake();
echo $car->brake(4);
echo $car->brake(5555);