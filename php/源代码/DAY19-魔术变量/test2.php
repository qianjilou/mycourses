<?php
	header('content-type:text/html;charset=utf-8');
	//这里有一个比较奇怪的语法现象=>属性的重载.

	class Person{
		public $name;
		protected $job;

		public function __construct($name, $job){
			$this->name = $name;
			$this->job = $job;
		}

		public function __set($pro_name, $pro_val){
			
		}
	}

	$p1 = new Person('张三', 'PHP架构师');
	echo '<pre>';
	var_dump($p1);

	$p1->name = '李四';

	var_dump($p1);

	//因为这个age 是不存在的，因此会触发__set的魔术方法，
	//但是如果程序员没有写这个__set魔术方法，看下情况：
	//1. 这样会动态的给你增加一个属性$age, 并且是public
    //2. 如果程序员不希望 属性动态重载，则可以写一个 __set魔术方法，但是不做处理即可.
		/*public function __set($pro_name, $pro_val){
				
		}*/
  
	$p1->age = 30;

	var_dump($p1);

