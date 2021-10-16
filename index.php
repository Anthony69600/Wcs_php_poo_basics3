<?php
// index.php bicycle

require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();


// index.php Car


$car = new Car('green', 4, 'electric');
echo $car->forward();

// index.php Truck

$truck = new Truck('red', 3, 35,'fuel');

$truck->setCurrentSpeed(50);
$truck->setNbWheels(8);


var_dump($truck);

        echo $truck->forward();
        echo $truck->brake();
        echo $truck->getLoad();


?>