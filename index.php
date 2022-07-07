<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Speedometer.php';

echo Speedometer::convertKmToMiles(10);

/*
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car("yellow", 5, "electric");
echo $car->forward();
var_dump($car);

$truck = new Truck("black", 3, "diesel", 22);
echo $truck->forward();
var_dump($truck);

$parkedCar = new Car("red", 5, "diesel");
$parkedCar->setParkBrake(true);
$notParkedCar = new Car("red", 5, "diesel");
$notParkedCar->setParkBrake(false);

try {
    $parkedCar->start();
} catch (Exception $e) {
    echo "Exception : " . $e->getMessage() ."<br>";
} finally {
    echo "Ma voiture roule comme un donut<br>";
}

try {
    $notParkedCar->start();
} catch (Exception $e) {
    echo "Exception : " . $e->getMessage() ."<br>";
} finally {
    echo "Ma voiture roule comme un donut<br>";
}

// Moving bike
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br>';

// Moving car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>';

// Moving truck
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->isFull(22) . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>';*/