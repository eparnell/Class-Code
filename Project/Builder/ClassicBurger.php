<?php

include_once('BurgerBuilder.php');

class ClassicBurger extends BurgerBuilder
{

	public function BuildBun()
	{
		$this->burger->setBun("sesame");
	}
	
	public function buildMeat()
	{
		$this->burger->setMeat("grilled");
	}
	
	public function buildTopping()
	{
		$this->burger->setTopping("ketchup+mustard+pickle");
	}



} //eoc