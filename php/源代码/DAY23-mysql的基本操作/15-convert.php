<?php
	header('content-type:text/html;charset=utf-8');
	//数据类型和对象的相互转换

	$person = array('name'=>'乔峰', 'job' => '帮主', 
	'skill' => '十八掌', 'house' => array('name' => '大辽', 'price' => 300));

	$person_obj = (object)$person;

	echo '<pre>';
	var_dump($person_obj);

	echo '<br>';
	echo '<br>' . $person_obj->name;
	echo '<br> house - name ' . $person_obj->house['name'];


	//基本数据类型转成成obj
	$appleNum = 20;
	$apple_obj = (object)$appleNum;

	echo '<pre>';
	var_dump($apple_obj);
	echo '<br> ' . $apple_obj->scalar;

	//对象转成数组

	class Cat{
		public $name = '小花猫';
		public $age = 45;
		protected $price = 56.7;
		private $food = '小鱼';
	}

	$cat = new Cat;

	$cat_arr = (array)$cat;

	echo '<br> cat_arr';
	var_dump($cat_arr);
	//这里，当对象转成数组后，私有的属性仍然无法直接访问.
	echo '<br> food = ' . $cat_arr['name'];

