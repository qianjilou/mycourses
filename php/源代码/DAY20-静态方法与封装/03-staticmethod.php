<?php
	header('content-type:text/html;charset=utf-8');

	//静态方法说明1

	class A{
		
		public $name;
		private static $address = '北京';

		public function __construct($name){
			$this->name = $name;
		}

		//静态方法
		public static function showAdd(){
			echo '<br> 地址是  ' . self::$address;
		}
	}
	//第一种调用方式[推荐使用]
	A::showAdd();
	
	//后面两种语法支持，但是不推荐
	$a = new A('小猫');
	$a->showAdd();
	$a::showAdd();