<?php
	header("content-type:text/html;charset=utf-8");
	
	
	//如果，我们希望把一个对象反序列化，则要把该类的定义引入进来

	class Dog{
		
		public $name;
		protected $age;
		function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
	}
	
	//对象的反序列化
	$dog_str = file_get_contents('d:/ok.txt');

	//对象的反序列化
	$dog = unserialize($dog_str);

	echo '<pre>';
	var_dump($dog);

	echo '<br> dog name ' . $dog->name;
