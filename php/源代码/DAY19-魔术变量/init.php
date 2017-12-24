<?php
	header('content-type:text/html;charset=utf-8');
	//类的自动加载

	//使用Dog.class. php 和 Cat.class.php

	//1.使用Dog.class. php 和 Cat.class.php
	//使用传统的方案.., 缺点是 不利于问题，很麻烦，灵活性不够
//	require './Dog.class.php';
//	require './Cat.class.php';


	//2. 类的自动加载
	/*
		@function 完成类的自动加载
		@param: $clas_name 是类的名称
		@说明: 当程序员使用到一个未定义的类时，就会自动的触发__autoLoad这个函数, 该函数是系统提供的
	*/
//	function __autoload($class_name){
//		
//		//echo '<br> clas_name ' . $class_name;
//		require './' . $class_name . '.class.php';
//	}

	//3. 现在我们需要处理如何加载不同文件夹下的类

	require './common.php';

	
	function __autoload($class_name){
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