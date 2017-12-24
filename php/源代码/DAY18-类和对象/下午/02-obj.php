<?php
	header('content-type:text/html;charset=utf-8');

	/*
	有两猫:一只名字叫小白,今年3岁,白色。还有一只叫小花,今年10岁,花色。请编写一个程序，当用户输入小猫的名字时，就显示该猫的名字，年龄，颜色。如果用户输入的小猫名错误，则显示 张没有这只猫猫。
	*/

	//定义一个类
	class Cat{
		
		public $name;
		public $age;
		public $color;
	}

	//创建一个对象
	$cat1 = new Cat;

	//给该猫对象赋值
	$cat1->name = '小白';
	$cat1->age = 3;
	$cat1->color = '白色';

	//简单使用一下
	echo '<br>';
	echo '小猫的信息如下';
	echo '<br>名字是 ' . $cat1->name;
	echo '<br>年龄是 ' . $cat1->age;
	echo '<br>颜色是 ' . $cat1->color;


	echo '<pre>';
	var_dump($cat1);







