<?php

	header('content-type:text/html;charset=utf-8');
	//对象序列化

	class Cat{
		
		public $name ;
		protected $age;
		private $food;

		public function __construct($name, $age, $food){
			$this->name = $name;
			$this->age = $age;
			$this->food = $food;
		}
	}
	$cat = new Cat('机器猫', 100, '电');
	//将$cat 保存到文件中, 在保存对象前，需要向将$cat 序列化
	file_put_contents('d:/cat.log', serialize($cat));

	//O:3:"Cat":3:{s:4:"name";s:9:"机器猫";s:6:"}
	//看到序列化的字串中含有数据和类型 

	echo '<br> 保存成功!';