<?php
	header('content-type:text/html;charset=utf-8');

	//静态方法说明1

	class A{
		
		public $name;
		private static $address = '北京';

		public function __construct($name){
			$this->name = $name;
		}

		//静态方法,静态方法中不能访问非静态属性
		public static function showAdd(){
			echo '<br> 地址是  ' . self::$address;
			// 下面的写法都是错误的!!! $this->name ....
			echo '<br> name ' . self::$name;
		}

		//普通的成员方法(非静态方法)
		public function test(){
			
			echo '<br> 地址是  ' . self::$address;
			echo '<br> name ' . $this->name;
		}

	}

	$a = new A('小猪');
	$a->test();

	
	

