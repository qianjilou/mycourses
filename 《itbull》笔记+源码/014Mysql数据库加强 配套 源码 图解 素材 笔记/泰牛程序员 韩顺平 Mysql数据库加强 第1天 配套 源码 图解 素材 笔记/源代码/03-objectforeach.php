<?php
	header("content-type:text/html;charset=utf-8");
	//对象的遍历

	class Cat{
		public $name = '小花猫';
		protected $age = 10;
		private $lover = '大黑猫';
		//这里我们写一个成员函数，变量所有的属性
		public function showAll(){	
			foreach($this as $pro_name => $pro_val){
				echo '<br> ' . $pro_name . ' = ' . $pro_val;
			}
		}
	}

	$cat = new Cat();
	//如果我们在类的外部遍历
	foreach($cat as $pro_name => $pro_val){
		echo '<br> ' . $pro_name . ' = ' . $pro_val;
	}
	//调用成员函数
	$cat->showAll();