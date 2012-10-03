<?php

class Car {
    private $make;
    private $model;
    function __construct($modelIn, $makeIn) {
      $this->make = $makeIn;
      $this->model  = $modelIn;
    }
    function getMake() {return $this->make;}
    function getModel() {return $this->model;}
    function getMakeAndModel() {
      return $this->getMake() . ' by ' . $this->getModel();
    }
}
	
	