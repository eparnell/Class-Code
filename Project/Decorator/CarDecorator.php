<?php

require_once('Car.php');
require_once('Honda.php');
require_once('Toyota.php');
require_once('Ford.php');

	class CarDecorator implements Car
	{
	
		protected $car;
		
		function __construct($car)
		{
			$this->car = $car;
		}
		
		function getRating()
		{
			return $this->car->getRating();
		}
	}