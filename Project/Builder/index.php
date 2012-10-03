<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);
require_once("Test.php");

$test = new Test();

echo $test->main();