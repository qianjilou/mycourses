<?php
	header('content-type:text/html;charset=utf-8');
	//类的自动加载 spl_autoload_register

	require './common.php';

	
	// spl_autoload_register 可以灵活的注册你自己的自动加载函数
	spl_autoload_register('my_autoload');

	function my_autoload($class_name){
		global $class_map;
		require $class_map[$class_name];
	}

	$cat = new Cat;
	$cat->cry();
	$dog = new Dog;
	$dog->cry();
	$tiger = new Tiger;
	$tiger->cry();
	$pig = new Pig;
	$pig->cry();