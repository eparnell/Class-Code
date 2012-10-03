<?php

defined('IN_APPLICATION') or exit;

require_once 'animal.php';

class bear extends animal {


//define what kind of animal it is
 function kind() {
	return "Bear!";
	}

//return what the colour is	
function color() {
	return "Brown!";
}
  

}