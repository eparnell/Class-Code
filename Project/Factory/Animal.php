<?php

class Animal {

	function category($legs = 0)
		{
			if($legs == 2)
			{
				return "Human";
			}
			
			elseif($legs == 4)
			{
				return "Animal";
			}
		}
	}