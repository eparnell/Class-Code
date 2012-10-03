<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);
require_once('Subject.php');
require_once('Observer.php');

$subject = new Subject();
$observer = new Observer();
$subject->attach($observer);
$subject->notify("I'm an observer pattern!");