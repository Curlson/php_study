<?php
	include 'Apple.php';
	include 'Orange.php';
	class Factory{
		public static function getInstance($fruitName) 
		{
			$fruit = null;
			if("Apple" == $fruitName) {
				$fruit = new Apple();
			}
			if("Orange" == $fruitName ){
				$fruit = new Orange();
			}
			return $fruit;
		}
	}
?>
