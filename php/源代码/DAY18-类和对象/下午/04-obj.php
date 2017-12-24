<?php
	header('content-type:text/html;charset=utf-8');

	class Person{
	
		//定义属性
		public $name = '张三';
		//如果没有给属性初识值，默认为null
		public $age;
		public $salary;
		public $isMarry;
		public $hobby;
		public $lover;
	}

	$p1 = new Person;

	//给属性赋值，各个数据类型
	$p1->name = '小宝';
	$p1->age = 30;
	$p1->salary = 4567.90;
	$p1->isMarry = false;
	$p1->hobby = array('no1'=>'旅游', 'no2'=>'吃', 'no2'=>'发微信');
	

	$p2 = new Person;
	$p2->name = '紫霞';

	$p1->lover = $p2;

	//如何访问对象的复合类型的成员属性

	//我希望输出 $p1 这个对象的 发微信的 爱好.

	echo '<br> ' . $p1->hobby['no2'];

	//我希望输出 $p1 这个对象的 情人的名字.
	echo '<br> ' . $p1->lover->name;



	echo '<pre>';
	var_dump($p1, $p2);