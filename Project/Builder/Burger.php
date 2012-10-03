<?php

class Burger
{
	private $bun;
	private $meat;
	private $topping;
	
	public function setBun($bun) 
	{
		$this->bun = $bun;
	}

	public function setMeat ($meat)
	{
		$this->meat = $meat;
	}

	public function setTopping($topping)
	{
		$this->topping = $topping;
	}
	
	public function echoIngredient()
	{
		echo "Bun : " .$this->bun."<br/>";
		echo "Meat: " .$this->meat."<br/>";
		echo "Toppings : " .$this->topping."<br/>";
		
	}
}