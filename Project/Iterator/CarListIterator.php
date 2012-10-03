<?php

require_once('CarList.php');
require_once('Car.php');

class CarListIterator {
    protected $carList;
    protected $currentCar = 0;

    public function __construct(CarList $carList) {
      $this->carList = $carList;
    }
    public function getCurrentCar() {
      if (($this->currentCar > 0) && 
          ($this->carList->getCarCount() >= $this->currentCar)) {
        return $this->carList->getCar($this->currentCar);
      }
    }
    public function getNextCar() {
	  if ($this->hasNextCar()) {
        return $this->carList->getCar(++$this->currentCar);
      } else {
        return NULL;
      }
    }
    public function hasNextCar() {
      if ($this->carList->getCarCount() > $this->currentCar) {
	    return TRUE;
	  } else {
        return FALSE;
	  }
    }
}