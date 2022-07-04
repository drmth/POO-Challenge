<?php

require 'Bicycle.php';
require 'Car.php';

$bike = new Bicycle("red");
$bike->setcurrentSpeed(10);

$threWheelsBike = new Bicycle('blue');
$threWheelsBike->setCurrentSpeed(10);

$car = new Car("yellow", 5, "nuclear");
$car->setCurrentSpeed(110);

$ferrari = new Car("red", 2, "money");
$ferrari->setCurrentSpeed(300);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br>';

// Moving car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>';

?>