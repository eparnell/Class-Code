<?php

require_once('Car.php');

	class Toyota implements Car
	{
		private $rating=3;
		
		function getRating()
		{
			return $this->rating;
		}
	}