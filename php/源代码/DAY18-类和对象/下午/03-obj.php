<?php
	header('content-type:text/html;charset=utf-8');

	//类与对象的关系

	//1.定义类(名字和属性)

	//类名的规范说明: 
	//(1) 类名的命名规范是大驼峰 $CatName  [小驼峰 $catName, 简称驼峰命名]
	
	class Cat{
		
		public $name;
		public $age;
		public $color;
	}

	//2.通过类来创建对应的对象实例/对象
	$cat1 = new Cat;

	//3. 给对象赋值
	$cat1->name = '波斯猫';
	$cat1->age = 1;
	$cat1->color = '黄色';
	
	$cat2 = new Cat;

	$cat2->name = '加菲猫';
	$cat2->age = 2;
	$cat2->color = '黄色';

	//看各个对象实例的区别
	echo '<Pre>';
	var_dump($cat1, $cat2);


	class Dog{
	
	}

	$dog1 = new Dog;
	var_dump($dog1);




