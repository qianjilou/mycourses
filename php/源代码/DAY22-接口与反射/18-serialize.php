<?php
	header('content-type:text/html;charset=utf-8');

	class Dog{
		
		public $name ;
		protected $age;
		private $food;

		public function __construct($name, $age, $food){
			$this->name = $name;
			$this->age = $age;
			$this->food = $food;
		}

		//如果我们没有写__sleep 默认会将所有的属性序列化
		public function __sleep(){
			
			//echo '<br> __sleep';
			//程序员可以在这里决定： 哪些属性被序列化
			return array('name', 'age', 'food');
		}

		public function __wakeup(){
			
			echo '<br> __wakeup';
			//程序员可以在这里决定: 对某些属性进行初始化，或者改变
			$this->name = '藏獒';
		}

	}

	$dog = new Dog('哮天犬', 300, '骨头');

	//序列化
	$dog_str = serialize($dog);
	
	echo '<pre>';
	var_dump($dog_str);

	//反序列化
	$dog_obj = unserialize($dog_str);

	var_dump($dog_obj);
