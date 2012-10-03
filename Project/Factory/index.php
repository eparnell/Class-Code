<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

require_once('Animal.php');
require_once('GetAnimal.php');
require_once('Info.php');

$kind = new Info(2);
echo "Name: ".$kind->name();
echo "<br/>";
echo "Kind: ".implode($kind->kind());