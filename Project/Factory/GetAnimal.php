<?php

class GetAnimal {

	function get($legs)
		{
			return Animal::category($legs);
		}
}

