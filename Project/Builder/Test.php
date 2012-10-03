<?php

require_once("Server.php");

class Test
{
	public static function main()
	{
		$server = new Server();
		$spicyBurger = new SpicyBurger();
		$classicBurger = new ClassicBurger();
		
		$server->setBurgerBuilder($spicyBurger);
		$server->constructBurger();
		$burger = $server->getBurger();
		$burger->echoIngredient();
		
		echo "<br/>";
		
		$server->setBurgerBuilder($classicBurger);
		$server->constructBurger();
		$burger = $server->getBurger();
		$burger->echoIngredient();
	
	}

	
}//eoc