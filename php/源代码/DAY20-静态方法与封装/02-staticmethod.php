<?php
	header('content-type:text/html;charset=utf-8');
	//静态方法


	class Person{
		public $name;
		//静态属性
		private static $total_apple = 200;
		
		//静态方法来操作静态属性
		public static function getApple(){
			
			echo '<br> 苹果一共有 '  . self::$total_apple;
		}
	}

	//通过类名在外部直接调用静态方法
	Person::getApple();