<?php

defined('IN_APPLICATION') or exit;

require_once 'animal.php';

class tiger extends animal {

//return what kind of animal it is
 function kind() {
	return "Tiger!";
	}
	
//return what colour it is
function color() {
	return "Black and Orange!";
}
  

}