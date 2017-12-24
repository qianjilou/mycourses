<?php
	header('content-type:text/html;charset=utf-8');
	//property_exists说明

	class A{
		public $name;
		protected $food;

		public function __construct($name, $food){
			$this->name = $name;
			$this->food = $food;
		}
	}

	$a = new A('小猫', '鱼儿');
	
	unset($a->name);

	echo'<pre>';
	var_dump($a);

	if(property_exists($a, 'name')){
		echo '<br> name属性存在';
	}

	//属性的重载
	$a->age = 100;

	echo '<pre>';
	var_dump($a);

	if(property_exists($a, 'age')){
		echo '<br> age属性存在';
	}else{
		echo '<br> age属性不存在';
	}

	unset($a->age);
	echo '<pre>';
	echo '<br>---------<br>';
	var_dump($a);

	if(property_exists($a, 'age')){
		echo '<br> age属性存在';
	}else{
		echo '<br> age属性不存在';
	}

	//property_exists(对象名, 属性)
	//1. 先判断该对象是否有这个属性，如果有则返回真.
	//2. 如果该对象没有有这个属性， 则继续判断该对象对应的类是否定义过这个属性，如果定义过仍然返回真，否则才返回假




