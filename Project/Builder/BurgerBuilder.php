<?php
require_once('Burger.php');

abstract class BurgerBuilder
{

	protected $burger;
	
	public function getBurger()
	{
		return $this->burger;
	}
	
	public function createNewBurger()
	{
		$this->burger = new Burger();
	}
	
	public abstract function buildBun();
	public abstract function buildMeat();
	public abstract function buildTopping();
	
} //eoc

