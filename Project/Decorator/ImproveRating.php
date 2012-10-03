<?php

require_once('CarDecorator.php');
require_once('Honda.php');
require_once('Ford.php');
require_once('Toyota.php');

	class ImproveRating extends CarDecorator
	{
		function getRating()
		{
			return $this->car->getRating() + 1;
		}
	}