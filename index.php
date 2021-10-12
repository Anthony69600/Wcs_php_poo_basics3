
<?php
// index.php bicycle

require 'Bicycle.php';
$bike = new Bicycle('blue');


$bike->setCurrentSpeed(15);

var_dump($bike);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');


$tornado->forward();

var_dump($bike);

echo '<br><br>';


// index.php Car

require 'Car.php';


$car = new Car("red", 2, "electricity");

$car->setCurrentSpeed(50);
$car->setCurrentEnergyLevel(80);

var_dump($car);


// Moving car
echo $car->start();
echo $car->forward();
echo '<br> Niveau d\'énergie de la voiture : ' . $car->getCurrentEnergyLevel() . '%' . '<br>';
echo $car->forward();
echo '<br> Niveau d\'énergie de la voiture : ' . $car->getCurrentEnergyLevel() . '%' . '<br>';
echo $car->brake();

var_dump($car);




?>