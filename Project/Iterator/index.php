<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

require_once('CarListIterator.php');
require_once('CarList.php');
require_once('Car.php');

$firstCar = new Car ('Honda', 'Accord');
$secondCar = new Car ('Mazda', '3');

$cars = new CarList();
$cars->addCar($firstCar);
$cars->addCar($secondCar);



$carIterator = new CarListIterator($cars);

  while ($carIterator->hasNextCar()) {
    $cars = $carIterator->getNextCar();
    echo 'getting next car with iterator :';
    echo $cars->getMakeAndModel();
    echo '<br />';
  }
 
  $car = $carIterator->getCurrentCar();
  echo 'getting current car with iterator :';
  echo $cars->getMakeAndModel();
  echo '';  












