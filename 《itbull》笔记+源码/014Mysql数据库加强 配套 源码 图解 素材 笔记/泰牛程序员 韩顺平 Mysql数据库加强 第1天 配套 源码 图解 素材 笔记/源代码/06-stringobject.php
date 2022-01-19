<?php
	header("content-type:text/html;charset=utf-8");
	//将对象当做字符串输出，并输出 各种信息

	class Dog{
		public $name;
		protected $age;
		private $lover;

		//函数
		public function __construct($name, $age, $lover){
			$this->name = $name;
			$this->age = $age;
			$this->lover = $lover;
		}

		protected function cry(){
			echo '汪汪叫';
		}
		
		//魔术方法
		public function __toString(){
			$reflect_class = new ReflectionClass($this);
			echo '<pre>';
			var_dump($reflect_class);

			echo '<br> 类名= ' . $reflect_class->getName();
			echo '<br> 类的方法有';
			$method_list = $reflect_class->getMethods();
			print_r($method_list);

			echo '<br> 类的属性有';
			$property_list = $reflect_class->getProperties();
			print_r($property_list);

			//取出大黄狗
			//echo '<br> ' . $property_list[0]->getValue($this);
			
			//函数列表

			return '';
		}
	}

	$dog = new Dog('大黄狗', 5, '小花狗');
	
	//需要这里输出 Dog 类的相关信息, 函数，属性，类名
	echo $dog;