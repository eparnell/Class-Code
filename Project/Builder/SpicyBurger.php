<?php
require_once('BurgerBuilder.php');

class SpicyBurger extends BurgerBuilder 
{

	public function buildBun()
		{

			$this->burger->setBun("Asiago");
		}
		
	public function buildMeat()
		{
		
			$this->burger->setMeat("broiled");
			
		}
		
	public function buildTopping()
	
		{
			$this->burger->setTopping("Lettuce+Tomato+HotSauce");
		
		}

}//eoc