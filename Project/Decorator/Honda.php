<?php
require_once('Car.php');

	class Honda implements Car
	{
		private $rating = 5;
		function getRating()
		{
			return $this->rating;
		}
	
	}