<?php
require_once('Car.php');

class CarList {
    private $cars = array();
	private $carCount = 0;
    public function __construct() {
    }
    public function getCarCount() {
      return $this->carCount;
    }
    private function setCarCount($newCount) {
      $this->carCount = $newCount;
    }
    public function getCar($carNumberToGet) {
	  if ( (is_numeric($carNumberToGet)) && 
           ($carNumberToGet <= $this->getCarCount())) {
           return $this->cars[$carNumberToGet];
         } else {
           return NULL;
         }
	}
    public function addCar(Car $carIn) {
      $this->setCarCount($this->getCarCount() + 1);
      $this->cars[$this->getCarCount()] = $carIn;
      return $this->getCarCount();
    }
    public function removeCar(Car $carIn) {
      $counter = 0;
      while (++$counter <= $this->getCarCount()) {
        if ($carIn->getMakeAndModel() == 
          $this->cars[$counter]->getMakeAndModel())
		  {
            for ($x = $counter; $x < $this->getCarCount(); $x++) {
              $this->cars[$x] = $this->cars[$x + 1];
          }
          $this->setCarCount($this->getCarCount() - 1);
        }
      }
      return $this->getCarCount();
    }
}