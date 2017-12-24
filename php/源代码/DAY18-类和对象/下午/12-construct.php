<?php
	header('content-type:text/html;charset=utf-8');

	class Cat{
		
//		public function C($num1){
//			echo '<br> num1 = ' . $num1;
//		}

		public function __construct($num1){
			echo '<br> __construct $num1 = ' . $num1;
		}
	}

	//同学们注意，以后我们在面向对象中，定义构造函数时，就直接使用
	// __construct的方式来定义构造函数即可
	$obj = new C(10000);