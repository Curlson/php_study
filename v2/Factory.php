<?php
	include 'Constraint/fruit.php';
	include 'Orange.php';
	//include 'Apple.php';
	class Factory{
		public static function getInstance($fruitName) 
		{
			$fruit = null;
			try{
				$instance = new ReflectionClass($fruitName);
				return $instance->newInstanceArgs();
			} catch (Exception $e) {
				die('方法不存在' . $e->getMessage());
			}
			return $fruit;
		}
	}
?>
