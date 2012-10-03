<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

require_once('CarDecorator.php');
require_once('ImproveRating.php');
require_once('DecreaseRating.php');

require_once('Honda.php');
require_once('Ford.php');
require_once('Toyota.php');

echo 'Honda:' . '<br/>';
$car = new Honda();
echo 'Rating: ' . '<br/>';
$car->getRating().'<br/>';
echo $car-> new ImproveRating((new Honda());