<?php

defined('IN_APPLICATION') or exit;

abstract class animal  {

//declare the getName function
 function getName(){
 $name = $this->kind();
 return $name;
 }
 
 function getColor(){
 $color = $this->color();
 return $color;
 }
 
 function toString() {
 return "This is a: " . $this->getName() . " And it's color is: " . $this->getColor();
 
 }
  abstract function kind();
  abstract function color();
}