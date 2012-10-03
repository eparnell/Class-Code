<?php

//Facade pattern. Subclasses are fed to the animal.php interface
// which is in turn utilized by the 'user' end

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

define('IN_APPLICATION',true);
require_once 'bootstrap.php';

//create new instances of the animals
$tiger = new tiger;
$bear = new bear;

//display the animals
print 'This is a: '. $tiger->getName().'<br />';
print 'Its color is: '. $tiger->getColor().'<br />';
print 'This is a: '. $bear->getName(). '<br />';
print 'Its color is: '. $bear->getColor().'<br />';

