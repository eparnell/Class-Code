<?php

require_once('Car.php');

	class Ford implements Car
	{
		private $rating=4;
		
		function getRating()
		{
			return $this->rating;
		}
	}