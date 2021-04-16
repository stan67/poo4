<?php

require_once 'car.php';
require_once 'Bicycle.php';
$car = new Car('blue', 5, 'gazoil');
$bike = new Bicycle('red');

$bike->setCurrentSpeed(0);
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo $bike->getColor();

$car->setCurrentSpeed(0);
var_dump($car);

$car->setHasParkBrake(true);
try {
    echo $car->start() . '<br>';
} catch (Exception $hasParkBrake) {
    echo "Exception reçue  : ". $hasParkBrake->getMessage() . "<br>";
    $car->setParkBrake();
} finally {
    echo 'Ma voiture roule<br>';
}
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
