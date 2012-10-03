<?php

require_once("BurgerBuilder.php");
require_once("SpicyBurger.php");
require_once("ClassicBurger.php");

class Server
{

private $burgerBuilder;

	public function setBurgerBuilder(BurgerBuilder $burgerBuilder)
	{
		$this->burgerBuilder = $burgerBuilder;
	}

	public function getBurger()
	{
		return $this->burgerBuilder->getBurger();
	}	

	public function constructBurger()
	{
		$this->burgerBuilder->createNewBurger();
		$this->burgerBuilder->buildBun();
		$this->burgerBuilder->buildMeat();
		$this->burgerBuilder->buildTopping();
	}
}//eoc