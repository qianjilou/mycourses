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
		private static function showAdd(){
			echo '<br> 地址是  ' . self::$address;
		}

		//通过内部调用
		public  function test(){
			
			//1. 方式1, 推荐使用
			self::showAdd();
			

			//后面两种我们不推荐
			//2. 方式2
			A::showAdd();
			//3. 方式3
			$this->showAdd();
		}
		
	}


	$a = new A('晓明');
	$a->test();

	
	

