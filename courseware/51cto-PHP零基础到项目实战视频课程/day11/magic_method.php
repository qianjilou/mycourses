<?php
	header( "content-type:text/html;charset=utf-8" );

	class Person {
		public $name = "张三";
		protected $phone = "123456789";
		private $money = 20000;

		// function __get( $k ) {
		// 	echo "你要访问我的{$k}属性<br/>";
		// }

		function __set( $k, $v ) {
			echo "你要设置我的{$k}属性, 值为{$v}<br/>";
		}

	}

	$p = new Person();
	// echo $p->name . "<br/>";
	// echo $p->phone . "<br/>";
	// echo $p->money . "<br/>";
	// $p->name = "李四";
	// $p->phone = "1234566";
	// $p->money = 3000;
	// $p->test = 3000;



?>