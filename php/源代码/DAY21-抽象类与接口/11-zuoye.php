<?php
	header("content-type:text/html;charset=utf-8");
	
	class Dog{
		public $name = 'abc';
	}

	$dog1 = new Dog();

	$class_name = 'Dog';
	
	$dog2 = new $class_name();
	echo '<pre>';
	var_dump($dog2);
