<?php
	header('content-type:text/html;charset=utf-8');
	//构造函数

	class Person{
		
		public $name;
		public $age;
		public $food;

		//构造函数
		public function __construct($in_name, $in_age, $in_food){
			
			echo '<br> ' . $in_name . ' ' . $in_age;
			//将输入的参数，赋值给成员属性
			// $this 表示当前对象， 谁调用我，$this就指向哪个对象
			$this->name = $in_name;
			$this->age = $in_age;
			$this->food = $in_food;

			//打印一下$this 这个值
			echo '<pre> 在构造函数中 ';
			var_dump($this);		
		}
	}

	//下面这句话，就会让系统自动的调用 构造函数
	$p1 = new Person('白骨精', 1000, '小孩');

	echo '<pre>';
	var_dump($p1);

	//...
	//$p1->name = ....