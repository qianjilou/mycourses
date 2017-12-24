<?php
	header('content-type:text/html;charset=utf-8');
	//构造函数

	class A{
		
		public function __construct($val){
			
			echo 'val = ' . $val;
			return 100;
		}
	}

	$obj = new A(100);

	var_dump($obj);

	