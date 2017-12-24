<?php
	header("content-type:text/html;charset=utf-8");
	
	class Person{
		public $name;
		public function __construct($name){
			$this->name = $name;
		}
	}
	class Dog{
		public $name;
		public function __construct($name){
			$this->name = $name;
		}
	}

	$dog1 = new Dog('abc');

	$p1 = new Person('abc');
	$p2 = new Person('abc');

	if($p1 == $p2){
		echo '<br> $p1 == $p2';
	}

	if($p1 == $dog1){
		echo '<br> $p1 == $dog1';
	}

	
	if($p1 === $p2){
		echo '<br> $p1 === $p2';
	}

	$p3 = &$p1;

	/*
	当使用比较运算符（==）比较两个对象变量时，比较的原则是：如果两个对象的属性和属性值 都相等，而且两个对象是同一个类的实例，那么这两个对象变量相等。 

	而如果使用全等运算符（===），这两个对象变量一定要指向某个类的同一个实例（即同一个对象）。 
	*/
	if($p1 === $p3){
		echo '<br> $p1 === $p3';
	}