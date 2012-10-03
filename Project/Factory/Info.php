<?php

class Info
{

	var $legs = '';
	var $ac = '';
	
	function Info($legs)
	{
		$this->legs = $legs;
		$this->ac =& GetAnimal::get($legs);
	}
	
	function name()
	{
		return $this->ac;
	}
	
	function kind()
	{
		if($this->ac == "Animal") 
			{
				return array('This is an animal');
			}
			
		elseif($this->ac == "Human")
		{
			return array('This is a human');
		}
	}
} //eoc